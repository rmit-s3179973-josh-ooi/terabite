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

Route::group(['as'=>'product.','prefix'=>'products'], function() {
	Route::group(['as'=>'post.'], function() {
		Route::get('/filter', ['as'=>'filter', 'uses'=>'ProductController@filter']);
	});
});

Route::group(['as'=>'account.','prefix'=>'my'], function() {
	Route::group(['as'=>'get.'], function() {
		Route::get('/', ['as'=>'home', 'uses'=>'AccountController@index']);
		Route::get('category',['as'=>'add.catergory','uses'=>'AccountController@category']);
	});

	Route::group(['as'=>'post.'], function(){
		Route::post('category',['as'=>'add.catergory','uses'=>'AccountController@postCategory']);		
	});
});

Route::group(['prefix'=>'cart','as'=>'cart.'], function() {
	Route::group(['as'=>'get.'], function(){
		Route::get('add/{id}', ['as'=>'add','uses'=>'CartController@addItemToCart']);
		Route::get('/',['as'=>'view','uses'=>'CartController@getCart']);
		Route::get('/delete',['uses'=>'CartController@test']);
	});	

	Route::group(['as'=>'post.'], function() {
		Route::get('remove/{id}',['as'=>'remove','uses'=>'CartController@removeItemFromCart','middleware'=>'cart']);
		Route::post('/', ['as'=>'update','uses'=>'CartController@updateCart', 'middleware'=>'cart']);
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


Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth','admin']], function(){

	Route::get('/', ['as'=>'get.home','uses'=>'Admin\AdminController@index']);

	Route::group(['prefix'=>'product','as'=>'product.'], function(){
		Route::get('add', ['as'=>'get.add','uses'=>'Admin\ProductController@create']);
		Route::get('/', ['as'=>'get.home','uses'=>'Admin\ProductController@index']);
		Route::get('/edit/{id}', ['as'=>'get.edit','uses'=>'Admin\ProductController@edit']);

		Route::post('add', ['as'=>'post.add','uses'=>'Admin\ProductController@store']);
		Route::post('/edit/{id}', ['as'=>'post.edit','uses'=>'Admin\ProductController@update']);
	});

	Route::group(['prefix'=>'category','as'=>'category.'], function(){
		Route::get('/',['as'=>'get.home','uses'=>'Admin\CategoryController@index']);
		Route::get('/add',['as'=>'get.add','uses'=>'Admin\CategoryController@create']);
		Route::get('/edit', ['as'=>'get.edit','uses'=>'Admin\CategoryController@index']);
		Route::get('delete/{id}',['as'=>'get.delete', 'uses'=>'Admin\CategoryController@delete']);

		Route::post('/add',['as'=>'post.add','uses'=>'Admin\CategoryController@store']);
	});
});
