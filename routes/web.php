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
Route::get('/admin', 'AdminController@login')->name('admin.index');
Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
Route::post('/admin/login', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/lien-he', 'Homecontroller@contact')->name('home.contact');
Route::post('/lien-he', 'Homecontroller@postContact')->name('home.postContact');


Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'checkLogin'],function (){
    Route::resource('default','DefaultController');
    Route::resource('category','CategoryController');
    Route::resource('photo','PhotoController');
    Route::resource('vendor','VendorController');
    //Route::resource('category','CategoryController');
    Route::resource('user','UserController');
    Route::resource('product','ProductController');
    Route::resource('article','ArticleController');
    Route::resource('setting','SettingController');
    Route::resource('contact','ContactController');
    Route::resource('banner','BannerController');

});



