<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdenReporteController extends Controller
{
    protected $orden;
    protected $reporte;     

    public function __construct(
        Orden       $orden,
        Reporte     $reporte
    ){
        $this->orden    = $orden;
        $this->reporte = $reporte;
    }

    public function store(Request $request, $id)
    {
        $orden = $this->orden->find($id);
        if ($orden) {
            $idsReporte = $request->all();
            try {
                $validator = Validator::make($request->all(), $this->reporte->getRules());

                if ($validator->fails()) {
                    return ResponseController::response('Todos los campos son requeridos', [], 404);
                }

                $input = $request->all();

                $save = $this->reporte->create($input);
                if ($save) {
                    $orden->reportes()->attach([$save->id]);
                    $orden->load(['entrega', 'vehiculos', 'conductores', 'reportes']);
                    return ResponseController::response('success', $orden);
                }                
                return ResponseController::response('fail', [], 400);              
            } catch (\Throwable $th) {
                return ResponseController::response('Element not found', [], 404);
            }            
        }
        return ResponseController::response('Element not found', [], 404);
    }
    
    public function update(Request $request, $id, $idReporte)
    {
        $orden = $this->orden->find($id);
        if ($orden) {

            $validator = Validator::make($request->all(), $this->reporte->getRules());

            if ($validator->fails()) {
                return ResponseController::response('Todos los campos son requeridos', [], 404);
            }

            $input = $request->all();

            $reporte = $this->reporte->find($idReporte);
    
            $save = $reporte->update($input);
    
            if ($save) {
                return ResponseController::response('success', $reporte);
            }
            return ResponseController::response('fail', [], 404); 
        }
        return ResponseController::response('Element not found', [], 404);
    }
}
