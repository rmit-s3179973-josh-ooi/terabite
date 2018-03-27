<?php

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

Route::group(['as'=>'website-'], function() {
	Route::get('/register', ['as'=>'register','uses'=>'Auth\RegisterController@gindex']);
	Route::get('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@index']);
});
