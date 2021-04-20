<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;
use App\Models\Documents\Universities;
use App\Models\Filter;
use App\Models\FilterGroup;
use App\Models\UniversityMajors;
use Config;

class ElasticController extends Controller
{
    protected $client;
    public function __construct(){
        $this->elasticsearch = ClientBuilder::create()->build();
    }

    public function filter(Request $request){
        $data = $request->all();
       
        $from = 10;
        if ($request->filled('offset')) {
            $from = $request->offset;
        }
        $match = array();
        $range = array();

        $data['filterGroups'] = FilterGroup::where('status',1)->orderBy('position','asc')->get();
        $filters = Filter::where('status',1)->orderBy('position','asc')->get();

        foreach($data['filterGroups'] as $groups){
            $group_slug = $groups->slug;
            if(empty($data[$group_slug])){
                continue;
            }
            if($groups->filter_group_type == 1){ // value
                if (is_array($data[$group_slug])) {
                    foreach($data[$group_slug]  as $val){
                        $match[]['match'] = array($group_slug => trim($val));
                    }
                }else{
                    $match[]['match'] = array($group_slug => trim($data[$group_slug]));
                }    
            } elseif($groups->filter_group_type == 2){ // range
                $range = [];
                if(strstr($data[$group_slug],'-') ){
                    $val = explode('-',$data[$group_slug]);
                    $range = [
                        "gte" => $val[0],
                        "lte" => $val[1]
                    ];
                }elseif(strstr($data[$group_slug],'>')){
                    $val = explode('>',$data[$group_slug]);
                    $range = [
                        "gt" => $val[1],
                    ];
                }elseif(strstr($data[$group_slug],'<')){
                    $val = explode('<',$data[$group_slug]);
                    $range = [
                        "lt" => $val[1]
                    ];
                }
                $match[]['range'] = array($group_slug => $range);
            }
           
        }
  
        $params = [
            'index' => Config::get('elasticsearch.index'),
            'body'  => [
                'query' => [
                    'bool' => [
                        'must' => $match
                    ]
                ],  
                "from" => $from
            ]
        ];

        //echo '<pre>';print_r($params);die;
        try {
            $results = $this->elasticsearch->search($params);
        } catch (Elasticsearch\Common\Exceptions\Curl\CouldNotConnectToHost $e) {
            $previous = $e->getPrevious();
        }
        
        $finalData = $data['university'] = $this->mapElasticDataToCollection($results);
        //view('profile', compact('data'))->render(),
        $finalData['html'] = view('university_v1.university-card',$data)->render();
        return response()->json($finalData);
    }

    public function matchPage(){
        $data['filterGroups'] = FilterGroup::where('status',1)->orderBy('position','asc')->get();
        $data['filters'] = Filter::where('status',1)->orderBy('position','asc')->get();
        $params = [
            'index' => Config::get('elasticsearch.index')
        ];

        try {
            $response = $this->elasticsearch->search($params);
            $data['university'] = $this->mapElasticDataToCollection($response);
        } catch (Elasticsearch\Common\Exceptions\Curl\CouldNotConnectToHost $e) {
            $previous = $e->getPrevious();
        }
        $data['breadcrums'] = [];
        $data['scholarships'] = [];
        return view('university_v1.university-match',$data);
    }
    public function mapElasticDataToCollection($response){
        $data['result'] = [];
        if (isset($response['hits']['hits']) && count($response['hits']['hits']) > 0) {
            foreach($response['hits']['hits'] as $val){
                $data['result'][] = (object) $val['_source'];
            }
        }
        $data['totalCount'] = ($response['hits']['total']['value']);
        $data['showCount'] = 10;
        return $data;
    }

    public function search(Request $request){
        $data = $request->all();
        $finalData = [];
        $query = "";
        if (!empty($data['query'])) {
            $query = trim($data['query']);
            // $query = [
            //     'multi_match' => [ 
            //         'query' => $query,
            //         'fields' => ['id','name','institutionLevel','profitType','vanityUrl','city','state','netPrice']
            //     ]
            // ];
        }
        $query =  [
            "query_string" => [
                "query" => $query,
                'fields' => ['name','institutionLevel','profitType','vanityUrl','city','state']
            ]
        ];

        $params = [
            'index' => Config::get('elasticsearch.index'),
            'size' => 5,
            'body'  => [
                'query' => $query
            ]
        ];
       // dd($query);
        try {
            $results = $this->elasticsearch->search($params);
            $finalData = $this->mapElasticDataToCollection($results);
        } catch (Elasticsearch\Common\Exceptions\Curl\CouldNotConnectToHost $e) {
            $previous = $e->getPrevious();
        }
        return response()->json($finalData);
    }
}
