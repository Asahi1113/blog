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
Route::post('admin/login','Admin\LoginController@postLogin')->name('AdminLogin');
//后台
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['admin.login']],function(){
    Route::get('index','IndexController@index');
    Route::get('logout','IndexController@logout')->name('AdminLogout');
});