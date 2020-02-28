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


/* 
Leaving these here because of student purpose but with resource should be fine
Route::get('orders/{order_id}', 'OrderController@show');
Route::post('orders/vehicle_assign', 'OrderController@vehicle_assign');
Route::post('orders/incident', 'OrderController@index');

Route::post('route/incident', 'RouteController@index'); 
*/

Route::resource('orders', 'OrderController');

Route::resource('routes', 'RouteController');
Route::post('routes/{route_id}/vehicle_assign', 'RouteController@vehicle_assign');
