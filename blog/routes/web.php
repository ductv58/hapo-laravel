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
	Route::get('login', 'AdminController@getLogin')->name('admin.get_login');
    Route::post('login', 'AdminController@postLogin')->name('admin.post_login');
    Route::post('logout', 'AdminController@logout')->name('admin.logout');
    Route::get('index', 'AdminController@index')->name('admin.index');
    Route::resource('students','StudentsController')->middleware('admin');
    Route::resource('teachers','TeachersController')->middleware('admin');
    Route::resource('course','CoursesController')->middleware('admin');
    Route::resource('subject','SubjectController')->middleware('admin');
});

Route::group(['prefix'=>'teacher','namespace' => 'Teacher'], function (){
	Route::get('login', 'TeacherController@getLogin')->name('teacher.get_login');
    Route::post('login', 'TeacherController@postLogin')->name('teacher.post_login');
    Route::post('logout', 'TeacherController@logout')->name('teacher.logout');
    Route::get('index', 'TeacherController@index')->name('teacher.index');
    Route::get('show_course/{id}', 'CoursesController@show')->name('teacher.course.show')->middleware('teacher');
    Route::get('register_course', 'CoursesController@getRegister')->name('teacher.course.get_register')->middleware('teacher');
    Route::post('register_course', 'CoursesController@postRegister')->name('teacher.course.post_register')->middleware('teacher');
    Route::get('list_course', 'CoursesController@getList')->name('teacher.course.get_list')->middleware('teacher');
    Route::post('delete/{id}', 'CoursesController@delete')->name('teacher.course.delete')->middleware('teacher');
    Route::get('add_point/{id}', 'CoursesController@getAddPoint')->name('teacher.course.get_add_point')->middleware('teacher');
    Route::post('add_point/{id}', 'CoursesController@postAddPoint')->name('teacher.course.post_add_point')->middleware('teacher');
    Route::get('activate/{token}', 'TeacherController@activate')->name('teacher.activate');
});

Route::group(['prefix'=>'student','namespace' => 'Student'], function (){
    Route::get('login', 'StudentController@getLogin')->name('student.get_login');
    Route::post('login', 'StudentController@postLogin')->name('student.post_login');
    Route::post('logout', 'StudentController@logout')->name('student.logout');
    Route::get('index', 'StudentController@index')->name('student.index');
    Route::get('show_course/{id}', 'CoursesController@show')->name('student.course.show')->middleware('student');
    Route::get('register_course', 'CoursesController@getRegister')->name('student.course.get_register')->middleware('student');
    Route::post('register_course', 'CoursesController@postRegister')->name('student.course.post_register')->middleware('student');
    Route::get('list_course', 'CoursesController@getList')->name('student.course.get_list')->middleware('student');
    Route::delete('delete/{id}', 'CoursesController@delete')->name('student.course.delete')->middleware('student');
    Route::get('activate/{token}', 'StudentController@activate')->name('student.activate');
    Route::get('reset_pass', 'StudentResetPasswordController@getReset')->name('student.get_reset')->middleware('student');
    Route::post('reset_pass', 'StudentResetPasswordController@postReset')->name('student.post_reset')->middleware('student');
    Route::get('forgot_pass', 'ForgotPasswordController@getReset')->name('student.get_reset');
    Route::post('forgot_pass', 'ForgotPasswordController@postReset')->name('student.post_reset');
    Route::get('forgot_pass_reset/{token}', 'ForgotPasswordController@getResetPass')->name('student.get_reset_pass');
    Route::post('forgot_pass_reset/{id}', 'ForgotPasswordController@postResetPass')->name('student.post_reset_pass');
});