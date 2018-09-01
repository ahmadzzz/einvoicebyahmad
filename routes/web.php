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
Route::get('/create', function () {
    return view('createuse');
});
Route::get('/contact', function () {
    return view('addcontact');
});

Route::get('/viewuser', function () {
    return view('viewalluser');
});
Route::get('/viewcontact', function () {
    return view('viewcontact');
});
Route::get('/payments', function () {
    return view('receivepayments');
});
Route::get('/total', function () {
    return view('total');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
