<?php

namespace App\Http\Controllers;

use App\Entrega;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EntregaController extends Controller
{
    protected $entrega;     

    public function __construct(Entrega $entrega)
    {
        $this->entrega = $entrega;
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrega = $this->entrega->all();
        if (count($entrega)) {
            return ResponseController::response('success', $entrega);
        }
        return ResponseController::response('no se encontro nada', [], 404);
    }

    public function show($id)
    {
        $entrega = $this->entrega->find($id);
        if ($entrega) {
            return ResponseController::response('success', $entrega);
        }
        return ResponseController::response('Element not found', [], 404);
    }  
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->entrega->getRules());

        if ($validator->fails()) {
            return ResponseController::response('Todos los campos son requeridos', [], 404);
        }

        $input = $request->all();

        $save = $this->entrega->create($input);

        if ($save) {
            return ResponseController::response('success', $save);
        }
        return ResponseController::response('fail', [], 404);
    }
    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->entrega->getRules());

        if ($validator->fails()) {
            return ResponseController::response('Todos los campos son requeridos', [], 404);
        }

        $input = $request->all();

        $entrega = $this->entrega->find($id);

        $save = $entrega->update($input);

        if ($save) {
            return ResponseController::response('success', $entrega);
        }
        return ResponseController::response('fail', [], 404);
    }
    
    public function destroy($id)
    {
        $entrega = $this->entrega->find($id);
        if ($entrega) {
            if ($entrega->delete()) {
                return ResponseController::response('success');
            }
            return ResponseController::response('fail', [], 400);
        }
        return ResponseController::response('Element not found', [], 404);
    }    
}
