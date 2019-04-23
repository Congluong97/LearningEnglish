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
Route::get('',function(){
	return view('admin.login');
});

Route::group(['prefix'=>'admin/login'],function(){
	Route::get('','LoginController@getLogin')->name('login');
	Route::post('','LoginController@postLogin');		
});

Route::group(['prefix'=>'admin/register'],function(){
	Route::get('','LoginController@getRegister');
	Route::post('','LoginController@postRegister');
});


Route::get('logout','LoginController@logout');
Route::group(['prefix'=>'admin','middleware'=>'checkLogin'],function(){
	Route::get('home','HomeController@home');
	Route::get('profile','UserController@getProfile');
	Route::post('profile','UserController@postProfile');
	Route::group(['prefix'=>'user'],function(){
		Route::get('list','UserController@listUser');
		Route::get('add','UserController@getAddUser');
		Route::post('add','UserController@postAddUser');
		Route::get('edit/{id}','UserController@getEditUser');
		Route::post('edit/{id}','UserController@postEditUser');
		Route::post('delete','UserController@deleteUser')->name('admin.user.delete');
	});
	
});

