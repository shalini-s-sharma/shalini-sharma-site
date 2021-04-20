<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\CourseType;
use App\Mail\SendMailable;
use DB;
use Log;

class StudyController extends Controller
{
    public function __construct(){
        echo 'fffff';
    }
    public function index(){
        $subject = Subject::all();
        //$courseType = CourseType::all();
        $i = 10;
        $courseType = DB::table('user')->where('id',10)->exists();
        dd($courseType);
        
        return view('index',['subject' => $subject,'courseType' => $courseType]);
    }

    public function sendmail(){
     
        Log::channel('slack')->critical('Something happened!');

        Log::emergency('The system is down!');

        // Mail::to('shalini.sharma@getmyuni.com')->send(new SendMailable());
        // echo 'email sent';
    }
    public function routing(){
        //return view('index');
        self::abc();
    }

    public static function abc(){
        dd('fsdfd');
    }
}
