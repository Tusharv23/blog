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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('tagtaste/test','HomeController@test');
Route::get('lol',function()
{
	return  'lol lol lol';

});

Route::get('crazy/{id}', 'HomeController@crazy');
Route::get('user11/{name?}', function ($name = 'Tushar') {
    return $name;
});

Route::get('user/{id}/{name}', function ($id, $name) {
    return  'UserID='.$id.' Name='.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);