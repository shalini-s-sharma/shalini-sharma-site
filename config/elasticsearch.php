<?php

// elastiquent.php

return array(

    /*
    |--------------------------------------------------------------------------
    | Custom Elasticsearch Client Configuration
    |--------------------------------------------------------------------------
    |
    | This array will be passed to the Elasticsearch client.
    | See configuration options here:
    |
    | http://www.elasticsearch.org/guide/en/elasticsearch/client/php-api/current/_configuration.html
    */
    'host'            => env('ELASTICSEARCH_HOST', 'localhost'),
    'port'            => env('ELASTICSEARCH_PORT', 9200),
    'scheme'          => env('ELASTICSEARCH_SCHEME', null),
    'user'            => env('ELASTICSEARCH_USER', null),
    'pass'            => env('ELASTICSEARCH_PASS', null),
    'index' => 'universites4',
    'mapping' => [
        'id' => [
            'type' => 'integer'
        ],
        'name' => [
            'type' => 'text'
        ],
        'vanityUrl' => [
            'type' => 'text'
        ],
        'city' => [
            'type' => 'text'
        ],
        'city-slug' => [
            'type' => 'text'
        ],
        'state' => [
            'type' => 'text'
        ],
        'state-slug' => [
            'type' => 'text'
        ],
        'school-type' => [
            'type' => 'text'
        ],
        'level-of-institution' => [
            'type' => 'text'
        ],
        'religious-affliation' =>[
            'type' => 'text'
        ],
        'net-price' =>[
            'type' => 'long'
        ],
        'campus-setting' => [
            'type' => 'text'
        ],
        'student-body-size'=>[
            'type' => 'text'
        ],
        'selectivity' => [
             'type' => 'long',   
        ],
        'online-friendliness' => [
            'type' => 'text'
        ]
    ]

    /*
    |--------------------------------------------------------------------------
    | Default Index Name
    |--------------------------------------------------------------------------
    |
    | This is the index name that Elasticquent will use for all
    | Elasticquent models.
    */

    

);