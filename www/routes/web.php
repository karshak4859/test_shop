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

/*Route::get('/', function () {
    return view('welcome');
});*/

//category
Route::match(['get', 'post'],'/', 'CategoryController@show');

Route::match(['get', 'post'],'/create', 'CategoryController@create');

Route::get('/show/{id}', 'CategoryController@oneCategory');

Route::match(['get', 'post'],'/edit/{id}', 'CategoryController@edit');

Route::get('/delete/{id}', 'CategoryController@delete');

//product

Route::match(['get', 'post'],'/product', 'ProductController@showProduct');

Route::match(['get', 'post'],'/createProduct', 'ProductController@createProduct');

Route::get('/showProduct/{id}', 'ProductController@oneCategoryProduct');

Route::match(['get', 'post'],'/editProduct/{id}', 'ProductController@editProduct');

Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct');

Route::match(['get', 'post'],'/productFilter', 'ProductController@productFilter');

Route::match(['get', 'post'],'/categoryFilter', 'ProductController@categoryFilter');
