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

Route::get('/admin/audio','AdminAudioController@index')->name('admin_audio.index');
Route::get('/admin/audio/get-data','AdminAudioController@anyData')->name('admin_audio.dataTable');
Route::get('/admin/audio/{id}','AdminAudioController@show')->name('admin_audio.show');
Route::post('/admin/audio/store','AdminAudioController@store')->name('admin_audio.store');
Route::delete('admin/audio/delete/{id}','AdminAudioController@destroy')->name('admin_audio.destroy');

Route::get('/admin/vocabulary','AdminVocabularyController@index')->name('admin_vocabulary.index');
Route::get('/admin/vocabulary/get-data','AdminVocabularyController@anyData')->name('admin_vocabulary.dataTable');
Route::post('/admin/vocabulary/store','AdminVocabularyController@Store')->name('admin_vocabulary.store');
Route::get('/admin/vocabulary/{id}','AdminVocabularyController@show')->name('admin_vocabulary.show');
Route::delete('/admin/vocabulary/delete/{id}','AdminVocabularyController@Destroy')->name('admin_vocabulary.destroy');