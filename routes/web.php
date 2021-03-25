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
Route::get('/', 'HomeController@index')->name('home.index');

Route::resource('default','DefaultController');
Route::resource('category','CategoryController');
Route::resource('photo','PhotoController');
Route::resource('vendor','VendorController');
Route::resource('category','CategoryController');
Route::resource('user','UserController');


Route::get('/', function () {
    return view('welcome');
});
