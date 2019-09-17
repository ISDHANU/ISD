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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@index')->name('index');
Route::get('/checkout/{id}', 'IndexController@checkout')->name('checkout');
Route::get('/product/{id}', 'IndexController@product')->name('product');
Route::get('/allitem', 'IndexController@allitem')->name('allitem');




Route::get('/admin', 'IndexController@overview')->name('overview');
// Route::get('/admin', 'giayController@getall')->name('adminallitem');
Route::get('/adminallitem', 'giayController@getall')->name('adminallitem');
Route::get('/adminadditem', 'IndexController@adminadditem')->name('adminadditem');
Route::post('/themgiay'			,'giayController@themgiay')		->name('themgiay');
Route::post('/user_search_item'	,'IndexController@user_search_item')		->name('user_search_item');
Route::post('/admin_search_item'	,'giayController@admin_search_item')		->name('admin_search_item');



Route::get('/logout'	,'IndexController@logout')		->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'giayController@getall')->name('home');
