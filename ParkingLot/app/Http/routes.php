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
    return view('pages.home');
});

Route::get('/add', function () {
    return view('pages.addCar');
});

Route::post('/success', array('uses'=>'addCarController@update'));

Route::resource('parkCar', 'ParkingSpotController');
