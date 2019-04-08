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

Route::group(['prefix'=>'admin/login'],function(){
	Route::get('','LoginController@getLogin')->name('login');
	Route::post('','LoginController@postLogin');		
});


Route::get('logout','LoginController@logout');
Route::group(['prefix'=>'admin','middleware'=>'checkLogin'],function(){
	Route::get('home','HomeController@home');
	Route::get('profile','UserController@getProfile');
	Route::post('profile','UserController@postProfile');
});

