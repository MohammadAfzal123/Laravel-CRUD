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
Route::get('student','StudentController@index');
Route::get('addStudent','StudentController@create')->name('add-student');
Route::post('storeDetail','StudentController@store')->name('save-detail');
Route::get('edit/{id}','StudentController@edit')->name('edit');
Route::post('update/{id}','StudentController@update')->name('update-detail');
Route::get('delete/{id}','StudentController@destroy')->name('delete');