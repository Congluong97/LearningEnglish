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


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |



Route::prefix('admin')->group(function(){
	Route::get('login', 'AdminAuth\AdminLoginController@showLoginForm')->name('admin.showLoginForm');
	Route::post('login', 'AdminAuth\AdminLoginController@login')->name('admin.login');
	// dang xuat admin
	Route::post('logout', 'AdminAuth\AdminLoginController@logout')->name('admin.logout');

	Route::get('register', 'AdminAuth\AdminRegisterController@showRegistrationForm')->name('admin.showRegistrationForm');
	Route::post('register', 'AdminAuth\AdminRegisterController@register')->name('admin.register');

	Route::middleware('admin.auth')->group(function(){

		Route::get('audio','AdminAudioController@index')->name('admin_audio.index');
		Route::get('audio/get-data','AdminAudioController@anyData')->name('admin_audio.dataTable');
		Route::get('audio/{id}','AdminAudioController@show')->name('admin_audio.show');
		Route::post('audio/store','AdminAudioController@store')->name('admin_audio.store');
		Route::delete('audio/delete/{id}','AdminAudioController@destroy')->name('admin_audio.destroy');

		Route::get('video','AdminVideoController@index')->name('admin_video.index');
		Route::get('video/get-data','AdminVideoController@anyData')->name('admin_video.dataTable');
		Route::get('video/{id}','AdminVideoController@show')->name('admin_video.show');
		Route::post('video/store','AdminVideoController@store')->name('admin_video.store');
		Route::get('video/{id}','AdminVideoController@edit');
		Route::put('video/{id}','AdminVideoController@update');
		Route::delete('video/delete/{id}','AdminVideoController@destroy')->name('admin_video.destroy');

		Route::get('vocabulary','AdminVocabularyController@index')->name('admin_vocabulary.index');
		Route::get('vocabulary/get-data','AdminVocabularyController@anyData')->name('admin_vocabulary.dataTable');
		Route::post('vocabulary/store','AdminVocabularyController@Store')->name('admin_vocabulary.store');
		Route::get('vocabulary/{id}','AdminVocabularyController@show')->name('admin_vocabulary.show');
		// Route::get('vocabulary/{id}','AdminVocabularyController@edit')->name('admin_vocabulary.edit');
		Route::put('vocabulary/{id}','AdminVocabularyController@update')->name('admin_vocabulary.update');
		Route::delete('vocabulary/delete/{id}','AdminVocabularyController@destroy')->name('admin_vocabulary.destroy');

		Route::get('lecture','AdminLectureController@index')->name('admin_lecture.index');
		Route::get('lecture/get-data','AdminLectureController@anyData')->name('admin_lecture.dataTable');
		Route::post('lecture/store','AdminLectureController@store')->name('admin_lecture.store');
		Route::get('lecture/{id}','AdminLectureController@edit')->name('admin_lecture.edit');
		Route::delete('lecture/delete/{id}','AdminLectureController@destroy')->name('admin_lecture.destroy');


		Route::get('listadmin','AdminListController@index')->name('admin_list.index');
		Route::get('listadmin/get-data','AdminListController@anyData')->name('admin_list.dataTable');
		// dang ky admin
		// Route::get('register', 'AdminAuth\AdminRegisterController@showRegistrationForm')->name('admin.showRegistrationForm');
		Route::post('listadmin/store', 'AdminListController@store')->name('admin_list.store');
		Route::get('listadmin/{id}','AdminListController@show')->name('admin_list.show');
		Route::delete('listadmin/{id}','AdminListController@destroy')->name('admin_list.destroy');


		Route::get('level','AdminLevelController@index')->name('admin_level.index');
		Route::get('level/get-data','AdminLevelController@anyData')->name('admin_level.dataTable');
		Route::post('level/store','AdminLevelController@store')->name('admin_level.store');
		Route::delete('level/delete/{id}','AdminLevelController@destroy')->name('admin_level.destroy');

	});
});


// =======

// Route::get('logout','LoginController@logout');
// Route::group(['prefix'=>'admin','middleware'=>'checkLogin'],function(){
// 	Route::get('home','HomeController@home');
// 	Route::get('profile','UserController@getProfile');
// 	Route::post('profile','UserController@postProfile');
// 	Route::group(['prefix'=>'user'],function(){
// 		Route::get('list','UserController@listUser');
// 		Route::get('add','UserController@getAddUser');
// 		Route::post('add','UserController@postAddUser');
// 		Route::get('edit/{id}','UserController@getEditUser');
// 		Route::post('edit/{id}','UserController@postEditUser');
// 		Route::get('delete/{id}','UserController@deleteUser');
// 	});

// });

// Auth::routes();

// Route::get('',function(){
// 	return view('admin.login');
// });

// Route::group(['prefix'=>'admin/login'],function(){
// 	Route::get('','LoginController@getLogin')->name('login');
// 	Route::post('','LoginController@postLogin');		
// });

// Route::group(['prefix'=>'admin/register'],function(){
// 	Route::get('','LoginController@getRegister');
// 	Route::post('','LoginController@postRegister');
// });

// // Route::get('logout','LoginController@logout');
// // Route::group(['prefix'=>'admin','middleware'=>'checkLogin'],function(){
// // 	Route::get('home','HomeController@home');
// // 	Route::get('profile','UserController@getProfile');
// // 	Route::post('profile','UserController@postProfile');
// // 	Route::group(['prefix'=>'user'],function(){
// // 		Route::get('list','UserController@listUser');
// // 		Route::get('add','UserController@getAddUser');
// // 		Route::post('add','UserController@postAddUser');
// // 		Route::get('edit/{id}','UserController@getEditUser');
// // 		Route::post('edit/{id}','UserController@postEditUser');
// // 		Route::get('delete/{id}','UserController@deleteUser');
// // 	});
// Route::get('logout','LoginController@logout');
// Route::group(['prefix'=>'admin','middleware'=>'checkLogin'],function(){
// 	Route::get('home','HomeController@home');
// 	Route::get('profile','UserController@getProfile');
// 	Route::post('profile','UserController@postProfile');
// 	Route::group(['prefix'=>'user'],function(){
// 		Route::get('list','UserController@listUser');
// 		Route::get('add','UserController@getAddUser');
// 		Route::post('add','UserController@postAddUser');
// 		Route::get('edit/{id}','UserController@getEditUser');
// 		Route::post('edit/{id}','UserController@postEditUser');
// 		Route::post('delete','UserController@deleteUser')->name('admin.user.delete');
// 	});

	
// });

Route::get('logout','UserHomeController@logout');

Route::get('home','UserHomeController@getHome')->middleware('checkLogout');
Route::get('login','UserHomeController@getLogin')->name('login')->middleware('checkLogout');
Route::post('login','UserHomeController@postLogin')->middleware('checkLogout');


Route::group(['middleware'=>'checkLogin'],function(){

	Route::get('homelogin','UserHomeController@getHomeLogin');
});
