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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'category'], function(){
    Route::get('', 'CategoryController@index')->name('category.index');
    Route::get('create', 'CategoryController@create')->name('category.create');
    Route::post('store', 'CategoryController@store')->name('category.store');
    Route::get('edit/{category}', 'CategoryController@edit')->name('category.edit');
    Route::post('update/{category}', 'CategoryController@update')->name('category.update');
    Route::post('delete/{category}', 'CategoryController@destroy')->name('category.destroy');
    Route::get('show/{category}', 'CategoryController@show')->name('category.show');
 });

 Route::group(['prefix' => '/'], function(){
    Route::get('products/{product_slug}', 'FrontController@singleProduct')->name('front.single-product');

 });


 Route::group(['prefix' => 'product'], function(){
    Route::get('', 'ProductController@index')->name('product.index');
    Route::get('create', 'ProductController@create')->name('product.create');
    Route::post('store', 'ProductController@store')->name('product.store');
    Route::get('edit/{product}', 'ProductController@edit')->name('product.edit');
    Route::post('update/{product}', 'ProductController@update')->name('product.update');
    Route::post('delete/{product}', 'ProductController@destroy')->name('product.destroy');
    Route::get('show/{product}', 'ProductController@show')->name('product.show');
 });
