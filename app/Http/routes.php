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

Route::resource('complaints','ComplaintController');
Route::resource('workorders','WorkorderController');
Route::resource('workers','WorkerController');
//Route::resource('user','UserController');
//Route::resource('admin','AdminController');
Route::resource('buildings','BuildingController');
Route::resource('properties','PropertyController');
Route::resource('buildingmanagers','BuildingmanagerController');
Route::resource('propertymanagers','PropertymanagerController');

Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('downloadExcel/{type}', 'WorkorderController@downloadExcel');
Route::get('downloadExcel/{type}', 'ComplaintController@downloadExcel');
