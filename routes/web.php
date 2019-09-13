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


Route::get('/pages/home','bookingController@showHome')->name('home');
Route::post('/pages/cars/list','bookingController@handleSearchCars')->name('handleSearchCars');

Route::get('/pages/cars/booking/{id}/{pickUp}/{dropOff}', 'bookingController@showBookingCar')->name('showBookingCar');
Route::post('/pages/cars/booking/{id}/{pickUp}/{dropOff}', 'bookingController@handleBookingCar')->name('handleBookingCar');


Route::get('/pages/about', 'bookingController@showAbout')->name('about');
Route::get('/pages/service', 'bookingController@showService')->name('service');


Route::get('/pages/cars/list','carController@showCarsList')->name('showCarsList');
Route::get('/pages/cars/viewByMark/{id}','carController@showCarsByMark')->name('showCarsByMark');



Route::get('/pages/contact','userController@showContact')->name('showContact');
Route::post('/pages/contact','userController@handleContact')->name('handleContact');

Route::get('/pages/users/add','userController@showAddUser')->name('showAddUser');
Route::post('/pages/users/add','userController@handleAddUser')->name('handleAddUser');
Route::post('/pages/users/account', 'userController@handleUpdateUser')->name('handleUpdateUser');


Route::get('/pages/users/login','userController@showUserLogin')->name('showUserLogin');
Route::post('/pages/users/login','userController@handleUserLogin')->name('handleUserLogin');
Route::get('/pages/users/logout','userController@handleUserLogout')->name('handleUserLogout');



Route::post('/pages/cars/add','carController@handleAddCar')->name('handleAddCar');
Route::get('/pages/admin/delete/{id}','carController@handleDeleteCar')->name('handleDeleteCar');
Route::post('/pages/cars/addMark','carController@handleAddMark')->name('handleAddMark');

Route::get('/pages/admin/confirm/{id}','bookingController@handleBookingConfirm')->name('handleBookingConfirm');
  Route::get('/pages/admin/refuse/{id}','bookingController@handleBookingRefuse')->name('handleBookingRefuse');
  Route::get('/pages/admin/clear/{id}','bookingController@handleBookingClear')->name('handleBookingClear');

 Route::middleware(['isAdmin'])->group(function () {
 	  Route::get('/pages/cars/add','carController@showAddCar')->name('showAddCar');
  	Route::get('/pages/admin/delete','carController@showDeleteCar')->name('showDeleteCar');
	  Route::get('/pages/cars/addMark','carController@showAddMark')->name('showAddMark');
	
  	Route::get('/pages/admin/check', 'bookingController@showCheckBooking')->name('showCheckBooking');	
    Route::get('/pages/admin/history', 'bookingController@showHistoryBooking')->name('showHistoryBooking'); 
});


  Route::middleware(['isUser'])->group(function () {
  	Route::get('/pages/users/list', 'bookingController@showBookingsList')->name('showBookingsList');
  	Route::get('/pages/users/payement', 'bookingController@showPaymentBooking')->name('showPaymentBooking');
  	Route::get('/pages/users/account', 'userController@showUpdateUser')->name('showUpdateUser');
  });

  

