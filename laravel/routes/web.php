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


// Route::get('',function(){
// 	return view('admin.login');
// });

// Route::group(['prefix'=>'admin/login'],function(){
// 	Route::get('','LoginController@getLogin')->name('login');
// 	Route::post('','LoginController@postLogin');		
// });

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
		// Route::get('audio/{id}','AdminAudioController@edit');
		Route::post('audio/{id}','AdminAudioController@update');
		Route::delete('audio/delete/{id}','AdminAudioController@destroy')->name('admin_audio.destroy');

		Route::get('video','AdminVideoController@index')->name('admin_video.index');
		Route::get('video/get-data','AdminVideoController@anyData')->name('admin_video.dataTable');
		Route::get('video/{id}','AdminVideoController@show')->name('admin_video.show');
		Route::post('video/store','AdminVideoController@store')->name('admin_video.store');
		Route::get('video/{id}','AdminVideoController@edit');
		Route::post('video/{id}','AdminVideoController@update');
		Route::delete('video/delete/{id}','AdminVideoController@destroy')->name('admin_video.destroy');

		Route::get('vocabulary','AdminVocabularyController@index')->name('admin_vocabulary.index');
		Route::get('vocabulary/get-data','AdminVocabularyController@anyData')->name('admin_vocabulary.dataTable');
		Route::post('vocabulary/store','AdminVocabularyController@Store')->name('admin_vocabulary.store');
		Route::get('vocabulary/{id}','AdminVocabularyController@show')->name('admin_vocabulary.show');
		// Route::get('vocabulary/{id}','AdminVocabularyController@edit')->name('admin_vocabulary.edit');
		Route::post('vocabulary/{id}','AdminVocabularyController@update')->name('admin_vocabulary.update');
		Route::delete('vocabulary/delete/{id}','AdminVocabularyController@destroy')->name('admin_vocabulary.destroy');

		Route::get('lecture','AdminLectureController@index')->name('admin_lecture.index');
		Route::get('lecture/get-data','AdminLectureController@anyData')->name('admin_lecture.dataTable');
		Route::post('lecture/store','AdminLectureController@store')->name('admin_lecture.store');
		Route::get('lecture/{id}','AdminLectureController@edit')->name('admin_lecture.edit');
		Route::post('lecture/{id}','AdminLectureController@update')->name('admin_lecture.update');
		Route::delete('lecture/delete/{id}','AdminLectureController@destroy')->name('admin_lecture.destroy');


		Route::get('listadmin','AdminListController@index')->name('admin_list.index');
		Route::get('listadmin/get-data','AdminListController@anyData')->name('admin_list.dataTable');
		Route::post('listadmin/store', 'AdminListController@store')->name('admin_list.store');
		Route::get('listadmin/{id}','AdminListController@edit')->name('admin_list.edit');
		Route::post('listadmin/{id}','AdminListController@update')->name('admin_list.update');
		Route::delete('listadmin/{id}','AdminListController@destroy')->name('admin_list.destroy');



		Route::get('level','AdminLevelController@index')->name('admin_level.index');
		Route::get('level/get-data','AdminLevelController@anyData')->name('admin_level.dataTable');
		Route::post('level/store','AdminLevelController@store')->name('admin_level.store');
		Route::get('level/{id}','AdminLevelController@edit')->name('admin_level.edit');
		Route::post('level/{id}','AdminLevelController@update')->name('admin_level.update');
		Route::delete('level/delete/{id}','AdminLevelController@destroy')->name('admin_level.destroy');

		Route::get('user','AdminUserController@index')->name('admin_user.index');
		Route::get('user/get-data','AdminUserController@anyData')->name('amdin_user.dataTable');
		Route::post('user/store','AdminUserController@store')->name('amdin_user.store');
		Route::get('user/{id}','AdminUsercontroller@edit')->name('admin_user.edit');
		Route::post('user/{id}','AdminUsercontroller@update')->name('admin_user.update');
		Route::delete('user/delete/{id}','AdminUserController@destroy')->name('admin_user.destroy');



		Route::get('event','AdminEventController@index')->name('admin_event.index');
		Route::get('event/get-data','AdminEventController@anyData')->name('admin_event.dataTable');
		Route::post('event/store','AdminEventController@store')->name('admin_event.store');
		Route::delete('event/delete/{id}','AdminEventController@destroy');

	});
});



Route::get('logout','UserHomeController@logout');
Route::get('register','UserHomeController@getRegister');
Route::post('register','UserHomeController@postRegister');
Route::get('home','UserHomeController@getHome')->middleware('checkLogout');
Route::group(['prefix'=>'login','middleware'=>'checkLogout'],function(){
	Route::get('','UserHomeController@getLogin');
	Route::post('','UserHomeController@postLogin');
});
Route::group(['middleware'=>'checkLogin'],function(){
	Route::get('homelogin','UserHomeController@getHomeLogin');
	Route::get('{user}/profile','UserHomeController@getProfile');
	Route::post('{user}/profile','UserHomeController@postProfile');
	Route::get('history','UserHomeController@getHistory');
});


Route::get('test', function(){
	return view('user.index');

});

Route::get('lectures', [
	'as'=>'lectures',
	'uses'=>'LectureController@getLecture'
]);

Route::get('single_lectures', [
	'as'=>'single_lectures',
	'uses'=>'single_lecturesController@getSingle_lectures'
]);

Route::get('level/{id}','LevelController@getLevel');


Route::get('single_lectures/{id}','Single_lecturesController@getSingle_lectures');


Route::get('instructors','VocabulariesController@getInstructor');
Route::get('vocabulary','VocabulariesController@getVocabularies');
Route::get('vocabulary/get-data','VocabulariesController@anyData')->name('vocabulary.dataTable');


Route::POST('check','Single_lecturesController@check');

Route::POST('search','UserHomeController@search');
