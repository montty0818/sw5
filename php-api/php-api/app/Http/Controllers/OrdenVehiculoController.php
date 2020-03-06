<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdenVehiculoController extends Controller
{
    protected $orden;
    protected $vehiculo;     

    public function __construct(
        Orden       $orden,
        Vehiculo    $vehiculo
    ){
        $this->orden    = $orden;
        $this->vehiculo = $vehiculo;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $orden = $this->orden->find($id);
        if ($orden) {
            $idsVehiculos = $request->all();
            try {
                $orden->vehiculos()->attach($idsVehiculos['vehiculos']);
                $orden->load(['entrega', 'vehiculos', 'conductores']);
                return ResponseController::response('success', $orden);                
            } catch (\Throwable $th) {
                return ResponseController::response('Element not found', [], 404);
            }            
        }
        return ResponseController::response('Element not found', [], 404);
    } 
    
    public function update(Request $request, $id, $idVehiculo)
    {
        $orden = $this->orden->find($id);
        if ($orden) {

            $validator = Validator::make($request->all(), $this->vehiculo->getRules());

            if ($validator->fails()) {
                return ResponseController::response('Todos los campos son requeridos', [], 404);
            }

            $input = $request->all();

            $vehiculo = $this->vehiculo->find($idVehiculo);
    
            $save = $vehiculo->update($input);
    
            if ($save) {
                return ResponseController::response('success', $vehiculo);
            }
            return ResponseController::response('fail', [], 404); 
        }
        return ResponseController::response('Element not found', [], 404);
    }    
}
