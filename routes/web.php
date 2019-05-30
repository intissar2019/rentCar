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

 


Route::get('/pages/contact', function () { return view('pages.contact');});
Route::get('/pages/home', function () { return view('pages.home');})->name('home');

Route::get('/pages/cars/list','carController@showCarsList')->name('showCarsList');

Route::get('/pages/cars/add','carController@showAddCar')->name('showAddCar');
Route::post('/pages/cars/add','carController@handleAddCar')->name('handleAddCar');

Route::get('/pages/users/add','userController@showAddUser')->name('showAddUser');
Route::post('/pages/users/add','userController@handleAddUser')->name('handleAddUser');

Route::get('/pages/cars/addMark','carController@showAddMark')->name('showAddMark');
Route::post('/pages/cars/addMark','carController@handleAddMark')->name('handleAddMark');

Route::get('/pages/users/login','userController@showUserLogin')->name('showUserLogin');
Route::post('/pages/users/login','userController@handleUserLogin')->name('handleUserLogin');

