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
	Route::get('/register', ['as'=>'register-get','uses'=>'Auth\RegisterController@index']);
	Route::get('/login', ['as'=>'login-get', 'uses'=>'Auth\LoginController@index']);
	Route::post('/login', ['as'=>'login-post', 'uses'=>'Auth\LoginController@login']);
	Route::post('/register', ['as'=>'register-post','uses'=>'Auth\RegisterController@register']);
	Route::get('/logout', ['as'=>'regiter-post','uses'=>'Auth\LoginController@logout']);
	Route::get('/password/reset', ['as'=>'reset-password', 'uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
	Route::post('/password/reset', ['as'=>'reset-password-post', 'uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);
	Route::get('/product/{id}', ['as'=>'get-product', 'uses'=>'ProductController@getProduct']);
	Route::get('/products', ['as'=>'search', 'uses'=>'ProductController@search']);
	Route::get('views/product', array('uses' => 'ProductController@index', 'as' => 'views.product'));
});
