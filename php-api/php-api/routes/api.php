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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('orders', 'OrderController');
Route::post('orders/{route_id}/incident', 'OrderController@report_incident');

Route::post('routes/{route_id}/vehicle_assign', 'RouteController@vehicle_assign');
Route::post('routes/{route_id}/incident', 'RouteController@report_incident');
