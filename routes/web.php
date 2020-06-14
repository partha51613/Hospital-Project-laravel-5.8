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
})->name('home');



/**********************************User Routes********************************** */

//Book Appointment
Route::get('/book', 'UserController@book')->name('userbook');
Route::get('/store','UserController@storeBookData')->name('bookstore');


/**********************************Admin Routes********************************** */

Route::get('/admin','AdminController@login')->name('adminlogin');
Route::get('/index','AdminController@index')->name('adminindex');

//Bookings
//Admin Bookings
Route::get('/bookings','AdminController@viewbookings')->name('adminviewbookings');
Route::get('/booking/{id}/delete','AdminController@deletebookings')->name('admindeletebookings');
Route::get('/booking/{id}/edit','AdminController@editbookings')->name('adminEditBooking');
Route::get('/booking/{id}/edit/store','AdminController@storenewbooking')->name('storeNewBooking');

//Departments
//Admin Departments

Route::get('/departments','AdminController@departments')->name('adminviewdepartments');
Route::get('/department/add','AdminController@addDepartment')->name('adminaddDepartment');
Route::get('/department/{id}/edit','AdminController@editdepartments')->name('admineditDepartments');
Route::get('/department/{id}/delete','AdminController@deletedepartments')->name('admindeletedepartments');
//Storing
Route::get('/department/store','AdminController@storedepartment')->name('storedepartment');
Route::get('/department/{id}/edit/store','AdminController@storenewdepartment')->name('storenewdepartment');
//Approve/Disapprove
Route::get('/{id}/approve','Admincontroller@approveAppointment')->name('approveAppointment');
Route::get('/{id}/cancel','Admincontroller@cancelAppointment')->name('cancelAppointment');

