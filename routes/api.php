<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1', 'middleware' => 'api'], function () {
    Route::get('/coffee_machines', 'Coffee\CoffeeMachineController@get');

    Route::get('/coffee_pods', 'Coffee\CoffeePodController@get');
});
