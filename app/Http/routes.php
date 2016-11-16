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
    return view('app');
});

// API Routes
Route::group(['prefix' => 'api'], function () {
	// GET routes
    Route::get('/get-vehicles-types', 'VehiclesController@getAllVehiclesTypes');
	Route::get('/get-vehicles', 'VehiclesController@getAllVehicles');
	Route::get('/get-vehicles-by-day/{date}', 'VehiclesController@getVehiclesByDay');
	Route::get('/get-vehicles-count-by-type', 'VehiclesController@getAllVehiclesByType');

	
	// POST routes
});

