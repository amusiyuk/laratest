<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id}', function ($id) {
    //Log::warning('Something could be going wrong.');    
/*    $data=["id"=>$id];
    return view('test',$data);*/
    return view('post_edit');
    
});

Route::get('/newpost', function (Request $request) {
    //Log::warning('Something could be going wrong.');
    
    
    return view('post_edit');
});

Route::get('/testrest', function (Request $request) {
    //Log::warning('Something could be going wrong.');

    //\App\Http\Requests\Request::
    $arr = ["Size"=>"Один","Age"=>"Два","Weight"=>"Три"];
    return json_encode($arr,JSON_UNESCAPED_UNICODE);
});
