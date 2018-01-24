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
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('/stores', 'storeController@create');
Route::resource('/product', 'productController@index');
Route::resource('/addition','productController@create');
Route::resource('/store','productController@store');
Route::resource('/test','testcontroller');
//Route::resource('/test_stote','testcontroller@store');
//Route::resource('/alltest', 'testController@index');
//Route::post('update/{{id}}','testcontroller@update');
