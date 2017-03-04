<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/FAQ', 'FAQController@index');
Route::get('/check', 'UserActionController@index');
Route::post('/add/customer', 'UserActionController@addUser')->name('add.customer');
Route::get('/delete/customer/{id}', 'UserActionController@deleteUser');
Route::get('/edit/customer/{id}', 'UserActionController@editUser');
Route::post('/edit/customer/','UserActionController@saveEditUser')->name('edit.customer');
Route::get('/sales/{id}', 'UserRelationController@displaySales');
Route::get('/customer/{id}/company/', 'UserRelationController@displayCompany');