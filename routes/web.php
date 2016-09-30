<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('oldabout', 'PagesController@getOldabout');
Route::get('/', 'PagesController@getIndex');

Route::get('/klas' , function() {
    $klasgenoten = [
        'stefan',
        'danny',
        'davy',
        'pascal',
        'mohammet'
    ];
    //return view('pages/klas', ['klasgenoten'=>$klasgenoten]);
    return view('pages/klas') ->with('klasgenoten', $klasgenoten);
});