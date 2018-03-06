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



Route::group(['prefix'=>'admin' ],function(){

	
	Route::group(['middleware' => 'ManageMiddleWare'] , function(){
		Route::group(['prefix'=>'users'],function(){
			Route::get('/','Admin\UsersController@index')->name('admin.users.list');
			Route::get('/create','Admin\UsersController@create')->name('admin.users.create');
			Route::post('/store','Admin\UsersController@store')->name('admin.users.store');
			Route::get('/edit/{id}','Admin\UsersController@edit')->name('admin.users.edit');
			Route::post('/update/{id}','Admin\UsersController@update')->name('admin.users.update');
			Route::get('/delete/{id}','Admin\UsersController@delete')->name('admin.users.delete');
			Route::get('/logout','Admin\UsersController@logout')->name('admin.users.logout');
		});

		Route::group(['prefix' => 'categories'],function(){
			Route::get('/','Admin\CategoriesController@index')->name('admin.categories.list');
			Route::get('/create','Admin\CategoriesController@create')->name('admin.categories.create');
			Route::post('/store','Admin\CategoriesController@store')->name('admin.categories.store');
			Route::get('/edit/{id}','Admin\CategoriesController@edit')->name('admin.categories.edit');
			Route::post('/update/{id}','Admin\CategoriesController@update')->name('admin.categories.update');
			Route::get('/delete/{id}','Admin\CategoriesController@delete')->name('admin.categories.delete');
			Route::get('/show_products/{id}','Admin\CategoriesController@show_products')->name('admin.categories.product');
			Route::get('/search','Admin\CategoriesController@search')->name('admin.categories.search');
		});

		route::group(['prefix'=>'products'],function(){
			Route::get('/','Admin\ProductsController@index')->name('admin.products.list');
			Route::get('/create','Admin\ProductsController@create')->name('admin.products.create');
			Route::post('/store','Admin\ProductsController@store')->name('admin.products.store');
			Route::get('/edit/{id}','Admin\ProductsController@edit')->name('admin.products.edit');
			Route::post('/update/{id}','Admin\ProductsController@update')->name('admin.products.update');
			Route::get('/delete/{id}','Admin\ProductsController@delete')->name('admin.products.delete');
			Route::get('/search','Admin\ProductsController@search')->name('admin.products.search');
		});
	});

	Route::get('/','Admin\HomeController@index')->name('admin')->middleware('loginPage');
	Route::get('/login','Admin\LoginController@getLogin')->name('admin.getLogin');
	Route::post('/login','Admin\LoginController@postLogin')->name('admin.postLogin');
});

Route::any('{all?}','Admin\HomeController@notfound')->where('all','(.*)');
