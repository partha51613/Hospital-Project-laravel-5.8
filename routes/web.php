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

//HomePage
Route::get('/', function () {
    return view('homepage');
});



//User Routes
Route::get('/register','UserController@register')->name('user.register');
Route::get('/login','UserController@login')->name('user.login');
Route::get('/store','UserController@storeRegistrationData')->name('user.store');
Route::get('/book', 'UserController@book')->name('user.book');
Route::get('/store','UserController@storeBookData')->name('book.store');

//Admin Routes
Route::get('/adminlogin','AdminController@login')->name('admin.login');
