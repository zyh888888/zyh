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

Route::prefix('Admin')->group(function(){
    //首页
    Route::get('index',"MyController@index");

    //详情页
    Route::get('detail/{id}',"MyController@show")->middleware('my.check')->name('show');

});
