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
//后台
//用户名登入
Route::get('login','Admin\auth\LoginController@index');
//用户名表单提交
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
