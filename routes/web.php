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

Route::get('/','IndexController@index');
//登录
Route::get('admin/login','Admin\LoginController@login');
Route::post('admin/login','Admin\LoginController@postLogin');
//后台
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['admin.login','admin.operation']],function(){
    Route::get('index','IndexController@index');
    Route::get('logout','LoginController@logout');
    Route::get('modify-password','profileController@getModifyPassword');
    Route::post('modify-password','profileController@postModifyPassword');
    Route::get('admin-list','adminController@getList');
    Route::post('admin-delete','adminController@postDelete');
});