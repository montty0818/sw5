<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Conductor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdenConductor extends Controller
{
    protected $orden;
    protected $conductor;     

    public function __construct(
        Orden       $orden,
        Conductor    $conductor
    ){
        $this->orden    = $orden;
        $this->conductor = $conductor;
    }

    public function store(Request $request, $id)
    {
        $orden = $this->orden->find($id);
        if ($orden) {
            $idsConductor = $request->all();
            try {
                $orden->vehiculos()->attach($idsConductor['conductores']);
                $orden->load(['entrega', 'vehiculos', 'conductores']);
                return ResponseController::response('success', $orden);                
            } catch (\Throwable $th) {
                return ResponseController::response('Element not found', [], 404);
            }            
        }
        return ResponseController::response('Element not found', [], 404);
    } 
    
    public function update(Request $request, $id, $idConductor)
    {
        $orden = $this->orden->find($id);
        if ($orden) {

            $validator = Validator::make($request->all(), $this->conductor->getRules());

            if ($validator->fails()) {
                return ResponseController::response('Todos los campos son requeridos', [], 404);
            }

            $input = $request->all();

            $conductor = $this->conductor->find($idConductor);
    
            $save = $conductor->update($input);
    
            if ($save) {
                return ResponseController::response('success', $conductor);
            }
            return ResponseController::response('fail', [], 404); 
        }
        return ResponseController::response('Element not found', [], 404);
    }
}
