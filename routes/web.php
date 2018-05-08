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


/**
 * 静态路由
 */
Route::get('/', function () {
    return view('homepage');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/apply', function () {
    return view('apply');
});
Route::get('/functions', function () {
    return view('functions');
});
Route::get('/rate', function () {
    return view('rate');
});
Route::get('/about/us', function () {
    return view('aboutUs');
});



Route::get('/paying/step=price', function () {
    return view('paying/inputPrice');
});
Route::get('/paying/step=paytype', function () {
    return view('paying/choicePayType');
});
Route::get('/paying/step=waiting', function () {
    return view('paying/waitPay');
});
Route::get('/paying/step=successful', function () {
    return view('paying/successful');
});
Route::get('/paying/step=fail', function () {
    return view('paying/fail');
});

/**
 * 动态路由
 */
Route::get('{shopNum}/paying/step=price', function () {
    return view('paying/inputPrice');
});