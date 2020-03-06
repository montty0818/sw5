<?php

namespace App\Http\Controllers;

use App\Conductor;
use App\Licencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConductorSuspencionController extends Controller
{
    protected $conductor;
    protected $licencia;     

    public function __construct(
        Conductor   $conductor,
        Licencia    $licencia
    ) {
        $this->conductor    = $conductor;
        $this->licencia     = $licencia;
    }

    public function index($idConductor)
    {
        $conductor = $this->conductor->find($idConductor);
        if ($conductor) {
            $licencias = $conductor->with(["licencias" => function($q){
                $q->where('estado', 'suspendido');
            }])->get();
            return ResponseController::response('success', $licencias);
        }
        return ResponseController::response('no se encontro nada', [], 404);
    }

    public function show($idConductor, $id)
    {
        $conductor = $this->conductor->find($idConductor);
        if ($conductor) {
            $licencias = $conductor->with(["licencias" => function($q) use ($id) {
                $q->where('id', $id);
            }])->get();            
            return ResponseController::response('success', $licencias);
        }
        return ResponseController::response('Element not found', [], 404);
    }    
    
    public function store(Request $request, $idConductor)
    {
        $conductor = $this->conductor->find($idConductor);
        if ($conductor) {

            $validator = Validator::make($request->all(), $this->licencia->getRules());

            if ($validator->fails()) {
                return ResponseController::response('Todos los campos son requeridos', [], 404);
            }

            $input = $request->all();

            $save = $this->licencia->create($input);

            if ($save) {
                $conductor->licencias()->attach([$save->id]);
                $conductor->load(['ordenes', 'licencias', 'notificaciones']);
                return ResponseController::response('success', $conductor);
            } 

            return ResponseController::response('fail', [], 404);
        }
        return ResponseController::response('Element not found', [], 404);
    }
    
    public function update(Request $request, $idConductor, $id)
    {
        $conductor = $this->conductor->find($idConductor);
        if ($conductor) {

            $validator = Validator::make($request->all(), $this->licencia->getRules());

            if ($validator->fails()) {
                return ResponseController::response('Todos los campos son requeridos', [], 404);
            }

            $input = $request->all();

            $licencia = $this->licencia->find($id);
    
            $save = $licencia->update($input);
    
            if ($save) {
                return ResponseController::response('success', $licencia);
            }
            return ResponseController::response('fail', [], 404); 
        }
        return ResponseController::response('Element not found', [], 404);
    }    
}
