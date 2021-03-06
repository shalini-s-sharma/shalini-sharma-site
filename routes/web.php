<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use App\Models\CourseType;

if (App::environment('production')) {
    URL::forceScheme('https');
}


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/hire-me', function () {
    return view('hire-me');
});

// Route::get('/send-mail', 'StudyController@sendmail');

// Route::get('/study','StudyController@routing');


