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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('template1','TestController@template1');

Route::get('template2','TestController@template2');

Route::get('template3','TestController@template3');

Route::get('template4','TestController@template4');

Route::get('template5','TestController@template5');