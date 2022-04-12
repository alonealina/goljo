<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\GoljoController@index')->name('index');
Route::get('search', 'App\Http\Controllers\GoljoController@search')->name('search');
Route::get('course', 'App\Http\Controllers\GoljoController@course')->name('course');
Route::get('practice', 'App\Http\Controllers\GoljoController@practice')->name('practice');
Route::get('ranking', 'App\Http\Controllers\GoljoController@ranking')->name('ranking');
Route::get('catalog', 'App\Http\Controllers\GoljoController@catalog')->name('catalog');

Route::get('girl/{id}', 'App\Http\Controllers\GirlController@show')->name('girl.show');
Route::get('event', 'App\Http\Controllers\EventController@index')->name('event');
Route::get('event/{id}', 'App\Http\Controllers\EventController@show')->name('event.show');
Route::get('news', 'App\Http\Controllers\NewsController@index')->name('news');
Route::get('news/{id}', 'App\Http\Controllers\NewsController@show')->name('news.show');
Route::get('course', 'App\Http\Controllers\CourseController@index')->name('course');
Route::get('course/{id}', 'App\Http\Controllers\CourseController@show')->name('course.show');
Route::get('practice', 'App\Http\Controllers\PracticeController@index')->name('practice');
Route::get('practice/{id}', 'App\Http\Controllers\PracticeController@show')->name('practice.show');

// 管理側
Route::get('admin/', 'App\Http\Controllers\AdminController@index')->name('admin.index');
Route::get('admin/girl_list', 'App\Http\Controllers\GirlController@girl_list')->name('admin.girl_list')->middleware('login');

Route::get('admin/event_list', 'App\Http\Controllers\EventController@event_list')->name('admin.event_list')->middleware('login');

Route::get('admin/course_list', 'App\Http\Controllers\CourseController@course_list')->name('admin.course_list')->middleware('login');

Route::get('admin/practice_list', 'App\Http\Controllers\PracticeController@practice_list')->name('admin.practice_list')->middleware('login');

Route::get('admin/news_list', 'App\Http\Controllers\NewsController@news_list')->name('admin.news_list')->middleware('login');
Route::get('admin/news_regist', 'App\Http\Controllers\NewsController@news_regist')->name('admin.news_regist')->middleware('login');
Route::post('admin/news_store', 'App\Http\Controllers\NewsController@news_store')->name('admin.news_store')->middleware('login');
Route::get('admin/news_edit/{id}/', 'App\Http\Controllers\NewsController@news_edit')->name('admin.news_edit')->middleware('login');
Route::post('admin/news_update', 'App\Http\Controllers\NewsController@news_update')->name('admin.news_update')->middleware('login');
Route::get('admin/news_delete/{id}/', 'App\Http\Controllers\NewsController@news_delete')->name('admin.news_delete')->middleware('login');

Route::POST('/admin_login', 'App\Http\Controllers\GoljoController@login')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\GoljoController@logout')->name('admin.logout')->middleware('login');

// ログイン
Route::get('admin/login', function () {return view('admin/login'); });

// Route::get('/admin_logout', 'App\Http\Controllers\AdminController@logout')->name('admin.logout')->middleware('login');