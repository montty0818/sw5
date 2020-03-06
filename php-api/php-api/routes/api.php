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

Route::resource('conductores', 'ConductorController');

Route::resource('ordenes', 'OrdenController');
Route::resource('ordenes.vehiculos', 'OrdenVehiculoController');
Route::resource('ordenes.conductores', 'OrdenConductor');
Route::resource('ordenes.reportes', 'OrdenReporteController');

Route::resource('entregas', 'EntregaController');

Route::resource('notificaciones', 'NotificacionController');
