<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\GoljoController@index')->name('index');
Route::post('app_store', 'App\Http\Controllers\GoljoController@app_store')->name('app_store');
Route::get('settle', 'App\Http\Controllers\GoljoController@settle')->name('settle');
Route::post('confirm_post', 'App\Http\Controllers\GoljoController@confirm_post')->name('confirm_post');
Route::get('confirm', 'App\Http\Controllers\GoljoController@confirm')->name('confirm');
Route::post('txid_store', 'App\Http\Controllers\GoljoController@txid_store')->name('txid_store');
Route::get('complete', 'App\Http\Controllers\GoljoController@complete')->name('complete');
Route::get('dashboard', 'App\Http\Controllers\GoljoController@dashboard')->name('dashboard')->middleware('login_user');

Route::get('admin/app_list', 'App\Http\Controllers\GoljoController@app_list')->name('admin.app_list')->middleware('login_admin');
Route::get('admin/app_list_delete', 'App\Http\Controllers\GoljoController@app_list_delete')->name('admin.app_list_delete')->middleware('login_admin');
Route::get('admin/search', 'App\Http\Controllers\GoljoController@search')->name('admin.search')->middleware('login_admin');

// ユーザーログイン
Route::get('login', function () { return view('login_user'); });
Route::get('reminder', function () { return view('reminder'); });

Route::POST('/user_login', 'App\Http\Controllers\GoljoController@login_user')->name('login');
Route::get('/user_logout', 'App\Http\Controllers\GoljoController@logout_user')->name('logout')->middleware('login_user');

// 管理側ログイン
Route::get('admin/login', function () { return view('login_admin'); });

Route::POST('/admin_login', 'App\Http\Controllers\GoljoController@login_admin')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\GoljoController@logout_admin')->name('admin.logout')->middleware('login_admin');