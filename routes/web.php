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
Route::get('/demo','IndexController@demo');
Route::get('/view','ViewController@index');
//登录
Route::get('admin/login','admin\IndexController@login');
//后台
Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>['admin.login']],function(){
    Route::get('index','IndexController@index');
    Route::resource('articles','ArticleController');
});
