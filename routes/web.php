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

Route::get('test1', function () {
    return 'helloworld';
});

Route::group(['prefix' => 'test'], function () {
    Route::get('test1', function () {
        return 'test-helloworld';
    });
});

Route::get('member/info', ['uses' => 'MemberController@info']);