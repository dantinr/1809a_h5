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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test/base64','Test\TestController@base64Test');
Route::get('/test/base64_decode','Test\TestController@testBase64Decode');

Route::get('/test/user_info','Test\TestController@userInfo');


//CURL测试
Route::get('/test/curl','Test\TestController@testCurl');
Route::post('/test/user/add','Test\TestController@userAdd');


