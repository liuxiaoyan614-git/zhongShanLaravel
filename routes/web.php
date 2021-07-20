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
// 首页
Route::get('/', function () {
    return view('welcome');
});


// 登录界面
Route::get("admin/login","Admin\LoginController@index");
// 登录处理
Route::post("admin/check","Admin\LoginController@check")->name('login');
// 退出登录
Route::get("admin/logout","Admin\LoginController@logout");

// 后台管理
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'AdminLogin'],function(){
	// 后台首页
	Route::get('/','IndexController@index');
	
	// 产品管理
	Route::resource('productType','ProductController');
});




