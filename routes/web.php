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
// Regular-Expressions [\w\d\-\_]+
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
    ->where('slug', '[\w\d\-\_]+');

Route::get('klas', 'PagesController@getKlas');
Route::resource('posts', 'PostController');

use Illuminate\Support\Facades\DB;

Route::get('insert', function () {
    DB::table('classes')->truncate();
    DB::table('classes')->insert([
        ['name_class' => 'Drupal', 'student_count' => 10],
        ['name_class'=>'Joomla', 'student_count'=>5],
        ['name_class' => 'PHP', 'student_count' => 6]
    ]);
    return 'data was addad';
});

Route::get('show' , function (){
    return DB::table('classes')->where('name_class', 'Drupal')->first();

    return $class->name_class;
});

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


