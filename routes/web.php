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
Route::get('klas', 'PagesController@getKlas');
Route::resource('posts', 'PostController');

/**
 * Route::get('page.contact/{name}', function($name) {
 * echo 'Hello there ' . $name;
 * });
 */
/**
 * middleware vervangen door middlewareGroup, verwacht dat gewoon
 * middleware ook werkt.
 * Niet meer nodig bij deze versie van Laravel
 * Route::group(['middlewareGroups' => ['web']], function () {
 * });

 */


