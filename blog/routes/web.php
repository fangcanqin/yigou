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
//配置后台首页
Route::get('/admin', 'Admin\IndexController@index');

//配置用户管理
Route::resource('/admin/Users','Admin\UsersController');