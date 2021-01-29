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

Route::get('/', 'App\IndexController@index');
Route::get('logout', 'App\IndexController@logout');
Route::get('test', 'App\IndexController@test');
Route::get('login', 'App\IndexController@login');
//Route::post('Auth/login', 'App\Auth\LoginController@index');
Route::group(['middleware' => ['userIsLogin']], function () {
    Route::get('/', 'App\IndexController@index');
});

Route::get('/admin/index','Admin\index\IndexController@index');
Route::get('/admin/article','Admin\index\ArticleController@index');     //文章
Route::get('/admin/comment','Admin\index\CommentController@index');
Route::get('/admin/announcement','Admin\index\AnnouncementController@index');
Route::get('/auth/login','Admin\auth\LoginController@index');       //用户名登入

