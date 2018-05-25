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
    Route::get('index',[
        'as'=>'AdminDashboard',
        'uses'=>'IndexController@index'
    ]);
    Route::get('logout',[
        'as'=>'AdminLogout',
        'uses'=>'LoginController@logout'
    ]);
    Route::get('modify-password',[
        'as'=>'AdminChangePassowrd',
        'uses'=>'profileController@getModifyPassword'
    ]);
    Route::post('modify-password',[
        'as'=>'AdminChangePassowrdPost',
        'uses'=>'profileController@postModifyPassword'
    ]);
    Route::get('admin-list',[
        'as'=>'AdminList',
        'uses'=>'adminController@getList'
    ]);
    Route::post('admin-delete',[
        'as'=>'AdminDelete',
        'uses'=>'adminController@postDelete'
    ]);
});