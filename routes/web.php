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
//后台管理
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => [
        'admin.login',
        'admin.operation'
    ]
],function(){
    //仪表盘
    Route::get('index',[
        'as' => 'AdminDashboard',
        'uses' => 'IndexController@index'
    ]);
    //退出登录
    Route::get('logout',[
        'as' => 'AdminLogout',
        'uses' => 'LoginController@logout'
    ]);
    //修改密码
    Route::get('modify-password',[
        'as' => 'AdminChangePassowrd',
        'uses' => 'ProfileController@getModifyPassword'
    ]);
    Route::post('modify-password',[
        'as' => 'AdminChangePassowrdPost',
        'uses' => 'ProfileController@postModifyPassword'
    ]);
    //管理员账号
    Route::get('admin-list',[
        'as' => 'AdminList',
        'uses' => 'AdminController@getList'
    ]);
    //删除管理员
    Route::post('admin-delete',[
        'as' => 'AdminDelete',
        'uses' => 'AdminController@postDelete'
    ]);
    //操作日志列表
    Route::get('operation-record-list',[
        'as' => 'AdminOperationRecordList',
        'uses' => 'OperationRecordController@getList'
    ]);
    //操作日志详情
    Route::get('operation-record-detail',[
        'as' => 'AdminOperationRecordDetail',
        'uses' => 'OperationRecordController@getDetail'
    ]);
    //查看响应内容
    Route::get('operation-record-response',[
        'as' => 'AdminOperationRecordResponseView',
        'uses' => 'OperationRecordController@getResponseView'
    ]);
    //货币信息
    Route::get('currency-list',[
        'as' => 'AdminCurrencyList',
        'uses' => 'CurrencyController@getList'
    ]);
    //货币信息
    Route::get('country-list',[
        'as' => 'AdminCountryList',
        'uses' => 'CountryController@getList'
    ]);
    //角色列表
    Route::get('role-list',[
        'as' => 'AdminRoleList',
        'uses' => 'RoleController@getList'
    ]);
    //删除角色
    Route::post('role-delete',[
        'as' => 'AdminRoleDelete',
        'uses' => 'RoleController@postDelete'
    ]);
    //权限列表
    Route::get('permission-list',[
        'as' => 'AdminPermissionList',
        'uses' => 'PermissionController@getList'
    ]);
    //权限列表
    Route::post('permission-delete',[
        'as' => 'AdminPermissionDelete',
        'uses' => 'PermissionController@postDelete'
    ]);

});