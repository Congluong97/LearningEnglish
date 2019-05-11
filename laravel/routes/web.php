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
		Route::delete('audio/delete/{id}','AdminAudioController@destroy')->name('admin_audio.destroy');

		Route::get('video','AdminVideoController@index')->name('admin_video.index');
		Route::get('video/get-data','AdminVideoController@anyData')->name('admin_video.dataTable');
		Route::get('video/{id}','AdminVideoController@show')->name('admin_video.show');
		Route::post('video/store','AdminVideoController@store')->name('admin_video.store');
		Route::delete('video/delete/{id}','AdminVideoController@destroy')->name('admin_video.destroy');

		Route::get('vocabulary','AdminVocabularyController@index')->name('admin_vocabulary.index');
		Route::get('vocabulary/get-data','AdminVocabularyController@anyData')->name('admin_vocabulary.dataTable');
		Route::post('vocabulary/store','AdminVocabularyController@Store')->name('admin_vocabulary.store');
		Route::get('vocabulary/{id}','AdminVocabularyController@show')->name('admin_vocabulary.show');
		Route::delete('vocabulary/delete/{id}','AdminVocabularyController@destroy')->name('admin_vocabulary.destroy');

		Route::get('lecture','AdminLectureController@index')->name('admin_lecture.index');
		Route::get('lecture/get-data','AdminLectureController@anyData')->name('admin_lecture.dataTable');
		Route::post('lecture/store','AdminLectureController@store')->name('admin_lecture.store');
		Route::delete('lecture/delete/{id}','AdminLectureController@destroy')->name('admin_lecture.destroy');


		Route::get('listadmin','AdminListController@index')->name('admin_list.index');
		Route::get('listadmin/get-data','AdminListController@anyData')->name('admin_list.dataTable');
		// dang ky admin
		// Route::get('register', 'AdminAuth\AdminRegisterController@showRegistrationForm')->name('admin.showRegistrationForm');
		Route::post('listadmin/register', 'AdminAuth\AdminRegisterController@register')->name('admin_list.register');
		Route::delete('listadmin/{id}','AdminListController@destroy')->name('admin_list.destroy');
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
Route::get('level1', [
	'as'=>'level1',
	'uses'=>'Level1Controller@getLevel1'

]);
Route::get('single_lectures', [
	'as'=>'single_lectures',
	'uses'=>'single_lecturesController@getSingle_lectures'
]);

Route::get('level2', [
	'as'=>'level2',
	'uses'=>'LevelController@getLevel2'
]);
Route::get('level3', [
	'as'=>'level3',
	'uses'=>'LevelController@getLevel3'
]);
Route::get('level4', [
	'as'=>'level4',
	'uses'=>'LevelController@getLevel4'
]);
Route::get('level5', [
	'as'=>'level5',
	'uses'=>'LevelController@getLevel5'
]);
<<<<<<< HEAD
Route::get('video{id}/audio/','Single_lecturesController@getVocabulary');
=======
>>>>>>> 5527ee9e156e9a880d05f98fc68b8ba3e550a7f1
