<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConductorController extends Controller
{
    protected $conductor;     

    public function __construct(Conductor $conductor)
    {
        $this->conductor = $conductor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductor = $this->conductor->all();
        if (count($conductor)) {
            return ResponseController::response('success', $conductor);
        }
        return ResponseController::response('no se encontro nada', [], 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->conductor->getRules());

        if ($validator->fails()) {
            return ResponseController::response('Todos los campos son requeridos', [], 404);
        }

        $input = $request->all();

        $save = $this->conductor->create($input);

        if ($save) {
            return ResponseController::response('success', $save);
        }
        return ResponseController::response('fail', [], 404);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conductor = $this->conductor->find($id);
        if ($conductor) {
            $conductor->load(['ordenes', 'licencias', 'notificaciones']);
            return ResponseController::response('success', $conductor);
        }
        return ResponseController::response('Element not found', [], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->conductor->getRules());

        if ($validator->fails()) {
            return ResponseController::response('Todos los campos son requeridos', [], 404);
        }

        $input = $request->all();

        $conductor = $this->conductor->find($id);

        $save = $conductor->update($input);

        if ($save) {
            return ResponseController::response('success', $conductor);
        }
        return ResponseController::response('fail', [], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conductor = $this->conductor->find($id);
        if ($conductor) {
            if ($conductor->delete()) {
                return ResponseController::response('success');
            }
            return ResponseController::response('fail', [], 400);
        }
        return ResponseController::response('Element not found', [], 404);
    }


    
    //
}
