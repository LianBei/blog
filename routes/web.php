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


Route::get('login','Admin\auth\LoginController@index');       //用户名登入
Route::post('auth/login', 'Admin\auth\LoginController@check');  //用户名表单提交
Route::group(['middleware'=>['adminLogin']],function (){        //seesion路由保护
    Route::get('admin/index','Admin\index\IndexController@index');     //报告页
    Route::get('admin/article','Admin\index\ArticleController@index');   //文章页
    Route::get('admin/comment','Admin\index\CommentController@index');     //评论页
    Route::get('admin/details','Admin\index\ArticleController@details');     //详情页
    Route::get('admin/delete','Admin\index\ArticleController@delete');     //删除
    Route::post('admin/add','Admin\index\ArticleController@add');     //添加
    //退出登录
    Route::get('logout','Admin\auth\LoginController@logout');
});
