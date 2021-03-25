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