<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/code/captcha/{tmp}', 'App\Http\Controllers\Admin\LoginController@captcha');
//Route::get('noaccess','App\Http\Controllers\Admin\LoginController@noaccess');

Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function(){

//后台登录页面路由
    Route::get('login','LoginController@login');
//验证码路由
    Route::get('code','LoginController@code');
//处理后台登录的路由，在此路由对应的方法中，如果验证失败，会跳到登录页面，如果验证成功，那么会跳到后台首页。
    Route::any('dologin','LoginController@doLogin');
//加密算法
    Route::get('jiami','LoginController@jiami');
});

//以下路由需要经过中间件,也就是需要经过登录验证后才可以访问。
Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin','middleware'=>['isLogin']],function() {

//后台欢迎路由
    Route::get('welcome','LoginController@welcome');
//后台退出登录路由
    Route::get('logout','LoginController@logout');
//后台登录首页
    Route::get('index', 'LoginController@index');

   //管理用户模块相关路由

    Route::get('user/del','UserController@delALL');
    Route::resource('user','UserController');

    //角色模块，角色授权路由
    Route::get('role/auth/{id}','RoleController@auth');
    Route::resource('role','RoleController');
    Route::post('role/doauth','RoleController@doAuth');

    //顾客模块相关路由
    Route::resource('customer','CustomerController');
    Route::get('customer/auth/{id}','CustomerController@auth');
    Route::post('customer/doauth','CustomerController@doAuth');

    Route::resource('permission','PermissionController');

    Route::resource('product','ProductController');
//    分类路由
//    修改排序



});

    //前台路由
    //用户注册、登录、退出
    Route::any("/user/register", 'App\Http\Controllers\Home\RegisterController@register');
    Route::any("/user/login", 'App\Http\Controllers\Home\RegisterController@login');
    Route::any("/user/dologin", 'App\Http\Controllers\Home\RegisterController@doLogin');
    Route::any("/user/logout", 'App\Http\Controllers\Home\RegisterController@logout');
    Route::post('doregister','App\Http\Controllers\Home\RegisterController@doRegister');

    Route::any("/home/index", 'App\Http\Controllers\Home\RegisterController@index');

    //前台商品页面
    //Route::get('emailregister','App\Http\Controllers\Home\RegisterController@register');
    Route::resource('/home/product','App\Http\Controllers\Home\ProductController');
    Route::any("/order/cartadd", 'App\Http\Controllers\Home\OrderController@cartadd');
