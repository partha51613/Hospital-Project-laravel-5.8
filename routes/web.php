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



/**********************************User Routes********************************** */

//Book Appointment
Route::get('/book', 'UserController@book')->name('userbook');
Route::get('/store','UserController@storeBookData')->name('bookstore');


/**********************************Admin Routes********************************** */

Route::get('/adminlogin','AdminController@login')->name('adminlogin');
Route::get('/index','AdminController@index')->name('adminindex');


//Bookings
Route::get('/viewbookings','AdminController@viewbookings')->name('adminviewbookings');
Route::get('/booking/{id}/delete','AdminController@deletebookings')->name('admindeletebookings');
Route::get('/admin','AdminController@admindashboard')->name('adminviewbookings');
Route::get('edit/{id}','AdminController@admineditbookings')->name('admineditbookings');
Route::get('/update/booking/{id}','AdminController@updatebookingdata')->name('updatebookingdata');
Route::post('/savedepartment','AdminController@savedepartments')->name('savedepartments');


//Departments
Route::get('/departments','AdminController@departments')->name('adminviewdepartments');
Route::get('/department/{id}/delete','AdminController@deletedepartments')->name('admindeletedepartments');
Route::get('/adddepartment','AdminController@addDepartment')->name('adminaddDepartment');
Route::get('/department','AdminController@viewdepartments')->name('viewdepartments');





//wait

//Temp Route

// Route::get('/editpage',function(){
//     return view('admin.edit');
// });