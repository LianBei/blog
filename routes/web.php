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
//前台
//首页
Route::get('/','App\index\IndexController@index');
//用户登录
Route::get('app/login','App\auth\LoginController@index');
//用户登录表单提交
Route::post('app/auth/login','App\auth\LoginController@check');
//用户注册
Route::get('registered','App\auth\RegisteredController@index');
//用户注册表单提交
Route::post('app/auth/registered', 'App\auth\RegisteredController@check');
//列表页
Route::get('app/index/list','App\index\ListController@index');
//详情页
Route::get('app/index/details','App\index\IndexController@details');
Route::group(['middleware' => ['checkLogin']],function (){
    //个人信息表
    Route::get('app/informationself','App\index\InformationselfController@index');
    //个人信息表单提交
    Route::post('app/index/selfAdd','App\index\InformationselfController@selfAdd');
    //新增文章
    Route::get('app/index/add','App\index\IndexController@add');
    //文章表单提交
    Route::post('app/add','App\index\IndexController@check');
    //删除
    Route::get('app/delete','App\index\InformationselfController@delete');
    //编辑
    Route::get('app/edit','App\index\InformationselfController@edit');
    //评论表单提交
    Route::post('app/comment','App\index\IndexController@comment');
    //退出登录
    Route::get('app/logout','App\auth\LoginController@logout');
});

//后台
//管理员登入
Route::get('login','Admin\auth\LoginController@index');
//管理员表单提交
Route::post('auth/login', 'Admin\auth\LoginController@check');
//seesion路由保护
Route::group(['middleware'=>['adminLogin']],function (){
    //报告页
    Route::get('admin/index','Admin\index\IndexController@index');
    //文章页
    Route::get('admin/article','Admin\index\ArticleController@index');
    //评论页
    Route::get('admin/comment','Admin\index\CommentController@index');
    //详情页
    Route::get('admin/details','Admin\index\ArticleController@details');
    //删除
    Route::get('admin/delete','Admin\index\ArticleController@delete');
    //添加
    Route::post('admin/add','Admin\index\ArticleController@add');
    //退出登录
    Route::get('logout','Admin\auth\LoginController@logout');
});
