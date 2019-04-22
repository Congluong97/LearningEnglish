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
// Route::get('',function(){
// 	return view('admin.login');
// });

// Route::group(['prefix'=>'admin/login'],function(){
// 	Route::get('','LoginController@getLogin')->name('login');
// 	Route::post('','LoginController@postLogin');		
// });



Route::get('/admin/audio','AdminAudioController@index')->name('admin_audio.index');
Route::get('/admin/audio/get-data','AdminAudioController@anyData')->name('admin_audio.dataTable');
Route::get('/admin/audio/{id}','AdminAudioController@show')->name('admin_audio.show');
Route::post('/admin/audio/store','AdminAudioController@store')->name('admin_audio.store');
Route::delete('admin/audio/delete/{id}','AdminAudioController@destroy')->name('admin_audio.destroy');

Route::get('/admin/video','AdminVideoController@index')->name('admin_video.index');
Route::get('/admin/video/get-data','AdminVideoController@anyData')->name('admin_video.dataTable');
Route::get('/admin/video/{id}','AdminVideoController@show')->name('admin_video.show');
Route::post('/admin/video/store','AdminVideoController@store')->name('admin_video.store');
Route::delete('admin/video/delete/{id}','AdminVideoController@destroy')->name('admin_video.destroy');

Route::get('/admin/vocabulary','AdminVocabularyController@index')->name('admin_vocabulary.index');
Route::get('/admin/vocabulary/get-data','AdminVocabularyController@anyData')->name('admin_vocabulary.dataTable');
Route::post('/admin/vocabulary/store','AdminVocabularyController@Store')->name('admin_vocabulary.store');
Route::get('/admin/vocabulary/{id}','AdminVocabularyController@show')->name('admin_vocabulary.show');
Route::delete('/admin/vocabulary/delete/{id}','AdminVocabularyController@destroy')->name('admin_vocabulary.destroy');

Route::get('/admin/lecture','AdminLectureController@index')->name('admin_lecture.index');
Route::get('/admin/lecture/get-data','AdminLectureController@anyData')->name('admin_lecture.dataTable');
Route::post('/admin/lecture/store','AdminLectureController@store')->name('admin_lecture.store');
Route::delete('/admin/lecture/delete/{id}','AdminLectureController@destroy')->name('admin_lecture.destroy');
// =======
Route::get('logout','LoginController@logout');
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

// >>>>>>> 24d9bac04ec1c5ececaec42cd84299b017becccc
