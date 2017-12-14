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

Route::group(['prefix' => 'admin','namespace' => 'Admin'], function (){
	Route::get('login', 'AdminController@getLogin')->name('admin.getLogin');
    Route::post('login', 'AdminController@postLogin')->name('admin.postLogin');
    Route::post('logout', 'AdminController@logout')->name('admin.logout');
    Route::get('index', 'AdminController@index')->name('admin.index');
    Route::resource('students','StudentsController')->middleware('admin');
    Route::resource('teachers','TeachersController')->middleware('admin');
    Route::resource('course','CourseController')->middleware('admin');
    Route::resource('subject','SubjectController')->middleware('admin');
});

Route::group(['prefix'=>'teacher','namespace' => 'Teacher'], function (){
	Route::get('login', 'TeacherController@getLogin')->name('teacher.getLogin');
    Route::post('login', 'TeacherController@postLogin')->name('teacher.postLogin');
    Route::post('logout', 'TeacherController@logout')->name('teacher.logout');
    Route::get('index', 'TeacherController@index')->name('teacher.index');
    Route::get('show_course/{id}', 'CourseController@show')->name('teacher.course.show')->middleware('teacher');
    Route::get('register_course', 'CourseController@getRegister')->name('teacher.course.getRegister')->middleware('teacher');
    Route::post('register_course', 'CourseController@postRegister')->name('teacher.course.postRegister')->middleware('teacher');
    Route::get('list_course', 'CourseController@getList')->name('teacher.course.getList')->middleware('teacher');
    Route::post('delete/{id}', 'CourseController@delete')->name('teacher.course.delete')->middleware('teacher');
    Route::get('add_point/{id}', 'CourseController@getAddPoint')->name('teacher.course.getAddPoint')->middleware('teacher');
    Route::post('add_point/{id}', 'CourseController@postAddPoint')->name('teacher.course.postAddPoint')->middleware('teacher');
    Route::get('activate/{token}', 'TeacherController@activate')->name('teacher.activate');
});

Route::group(['prefix'=>'student','namespace' => 'Student'], function (){
    Route::get('login', 'StudentController@getLogin')->name('student.getLogin');
    Route::post('login', 'StudentController@postLogin')->name('student.postLogin');
    Route::post('logout', 'StudentController@logout')->name('student.logout');
    Route::get('index', 'StudentController@index')->name('student.index');
    Route::get('show_course/{id}', 'CourseController@show')->name('student.course.show')->middleware('student');
    Route::get('register_course', 'CourseController@getRegister')->name('student.course.getRegister')->middleware('student');
    Route::post('register_course', 'CourseController@postRegister')->name('student.course.postRegister')->middleware('student');
    Route::get('list_course', 'CourseController@getList')->name('student.course.getList')->middleware('student');
    Route::delete('delete/{id}', 'CourseController@delete')->name('student.course.delete')->middleware('student');
    Route::get('activate/{token}', 'StudentController@activate')->name('student.activate');
    Route::get('reset_pass', 'StudentResetPasswordController@getReset')->name('student.getReset')->middleware('student');
    Route::post('reset_pass', 'StudentResetPasswordController@postReset')->name('student.postReset')->middleware('student');
});