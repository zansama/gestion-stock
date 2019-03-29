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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@show');
Route::get('/addCategory', 'CategoryController@addCategory');
Route::post('/addCategory', 'CategoryController@store');
Route::get('/category/update/{id}', 'CategoryController@edit');
Route::post('/category/update/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@destroy');