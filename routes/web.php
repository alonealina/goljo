<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\GoljoController@index')->name('index');
Route::get('search', 'App\Http\Controllers\GoljoController@search')->name('search');
Route::get('event', 'App\Http\Controllers\GoljoController@event')->name('event');
Route::get('course', 'App\Http\Controllers\GoljoController@course')->name('course');
Route::get('practice', 'App\Http\Controllers\GoljoController@practice')->name('practice');
Route::get('ranking', 'App\Http\Controllers\GoljoController@ranking')->name('ranking');
Route::get('catalog', 'App\Http\Controllers\GoljoController@catalog')->name('catalog');

Route::get('news', 'App\Http\Controllers\NewsController@index')->name('news');
Route::get('news/{id}', 'App\Http\Controllers\NewsController@show')->name('news.show');


// ユーザーログイン
Route::get('login', function () { return view('login_user'); });
Route::get('reminder', function () { return view('reminder'); });

Route::POST('/user_login', 'App\Http\Controllers\GoljoController@login_user')->name('login');
Route::get('/user_logout', 'App\Http\Controllers\GoljoController@logout_user')->name('logout')->middleware('login_user');

// 管理側ログイン
Route::get('admin/login', function () { return view('login_admin'); });

Route::POST('/admin_login', 'App\Http\Controllers\GoljoController@login_admin')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\GoljoController@logout_admin')->name('admin.logout')->middleware('login_admin');