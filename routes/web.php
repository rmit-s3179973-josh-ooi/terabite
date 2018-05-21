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

Route::group(['as'=>'website.'], function() {
	Route::group(['as'=>'get.'], function(){
		Route::get('/',['as'=>'home','uses'=>'PageController@getHome']);
		Route::get('/register', ['as'=>'register','uses'=>'Auth\RegisterController@index']);
		Route::get('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@index']);	
		Route::get('/logout', ['as'=>'logout','uses'=>'Auth\LoginController@logout']);
		Route::get('/password/reset', ['as'=>'reset.password', 'uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
		Route::get('/product/{id}', ['as'=>'product', 'uses'=>'ProductController@getProduct']);
		Route::get('/products', ['as'=>'search', 'uses'=>'ProductController@search']);
		Route::get('/activate/{code}',['as'=>'verification-code','uses'=>'VerificationController@activate']);
		Route::get('/product/review/{id}',['as'=>'review','uses'=>'ReviewController@index']);
	});
	
	Route::group(['as'=>'post.'], function() {
		Route::post('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@login']);
		Route::post('/register', ['as'=>'register','uses'=>'Auth\RegisterController@register']);
		Route::post('/password/reset', ['as'=>'reset.password', 'uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);	
		Route::post('/product/review/{id}',['as'=>'review','uses'=>'ReviewController@postReview']);
	});
});

Route::group(['as'=>'account.','prefix'=>'account'], function() {
	Route::group(['as'=>'get.'], function() {
		Route::get('/', ['as'=>'home', 'uses'=>'AccountController@index']);
	});
});

Route::group(['prefix'=>'cart','as'=>'cart.'], function() {
	Route::group(['as'=>'get.'], function(){
		Route::get('add/{id}', ['as'=>'add','uses'=>'CartController@addItemToCart']);
		Route::get('/',['as'=>'view','uses'=>'CartController@getCart']);
	});	

	Route::group(['as'=>'post.'], function() {
		Route::get('remove/{id}',['as'=>'remove','uses'=>'CartController@removeItemFromCart','middleware'=>'cart']);
	});
});

Route::group(['prefix'=>'checkout','as'=>'checkout.'], function() {
	Route::group(['as'=>'get.'], function(){
		Route::get('/', ['as'=>'view','uses'=>'CheckoutController@getCheckout']);
		Route::get('add/address', ['as'=>'add.address','uses'=>'CheckoutController@getAddAddress']);
		Route::get('/complete/{id}', ['as'=>'complete', 'uses'=>'CheckoutController@getComplete']);
	});

	Route::group(['as'=>'post.'], function() {
		Route::post('/',['as'=>'checkout', 'uses'=>'CheckoutController@postCheckout']);
		Route::post('add/address', ['as'=>'add.address','uses'=>'CheckoutController@postAddAddress']);
	});
});