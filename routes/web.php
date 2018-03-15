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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/apply', function () {
    return view('apply');
});
Route::get('/index', function () {
    return view('login');
});
Route::get('register','RegisterController@countries');
Route::post('register','RegisterController@register');
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');
Route::get('apply','AplicationController@countries');
Route::post('apply','AplicationController@validation');
Route::get('/view',function(){return view('view');});
