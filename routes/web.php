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



Route::group(['prefix'=>'admin'],function(){
	Route::get('/','Admin\HomeController@index')->name('admin');
	Route::get('/login','Admin\LoginController@getLogin')->name('getLogin');
	Route::post('/login','Admin\LoginController@postLogin')->name('postLogin');

	Route::group(['prefix'=>'users'],function(){
		Route::get('/','Admin\UsersController@index')->name('users.list');
		Route::get('/create','Admin\UsersController@create')->name('users.create');
		Route::post('/store','Admin\UsersController@store')->name('users.store');
		Route::get('/edit/{id}','Admin\UsersController@edit')->name('users.edit');
		Route::post('/update/{id}','Admin\UsersController@update')->name('users.update');
		Route::get('/delete/{id}','Admin\UsersController@delete')->name('users.delete');
		Route::get('/logout','Admin\UsersController@logout')->name('users.logout');
	});

	Route::group(['prefix' => 'categories'],function(){
		Route::get('/','Admin\CategoriesController@index')->name('categories.list');
		Route::get('/create','Admin\CategoriesController@create')->name('categories.create');
		Route::post('/store','Admin\CategoriesController@store')->name('categories.store');
		Route::get('/edit/{id}','Admin\CategoriesController@edit')->name('categories.edit');
		Route::post('/update/{id}','Admin\CategoriesController@update')->name('categories.update');
		Route::get('/delete/{id}','Admin\CategoriesController@delete')->name('categories.delete');
	});

	route::group(['prefix'=>'products'],function(){
		Route::get('/','Admin\ProductsController@index')->name('products.list');
		Route::get('/create','Admin\ProductsController@create')->name('products.create');
		Route::post('/store','Admin\ProductsController@store')->name('products.store');
		Route::get('/edit/{id}','Admin\ProductsController@edit')->name('products.edit');
		Route::post('/update/{id}','Admin\ProductsController@update')->name('products.update');
		Route::get('/delete/{id}','Admin\ProductsController@delete')->name('products.delete');
	});
});
