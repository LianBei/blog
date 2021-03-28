<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login','vue\LoginController@login');
Route::post('time1','vue\LoginController@time1');
Route::post('getPassword','vue\LoginController@getPassword');
Route::get('getAll','vue\LoginController@getAll');
Route::get('deleteUser','vue\LoginController@deleteUser');
Route::post('addUser','vue\LoginController@addUser');
Route::Post('editUser','vue\LoginController@editUser');

Route::get('getUser','vue\ListController@getUser');
Route::get('deleteUser2','vue\ListController@deleteUser2');
Route::post('editUser2','vue\ListController@editUser2');
Route::post('addUser2','vue\ListController@addUser2');


Route::get('getUser3','vue\BlogController@getUser3');
Route::get('deleteUser3','vue\BlogController@deleteUser3');
Route::post('editUser3','vue\BlogController@editUser3');
Route::post('addUser3','vue\BlogController@addUser3');
Route::get('likeUser','vue\BlogController@likeUser');