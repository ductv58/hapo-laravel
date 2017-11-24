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

Route::group(['prefix' => 'admin'], function (){
	Route::get('login', 'AdminController@getLogin')->name('admin.getLogin');
    Route::post('login', 'AdminController@postLogin')->name('admin.postLogin');
    Route::get('logout', 'AdminController@logout')->name('admin.logout');
    Route::get('index', 'AdminController@index')->name('admin.index');
    Route::resource('students','StudentsController')->middleware('admin');
    Route::resource('teachers','TeachersController')->middleware('admin');
    Route::resource('course','CourseController')->middleware('admin');
    Route::resource('subject','SubjectController')->middleware('admin');
});