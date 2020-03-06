<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notificacion;
use Illuminate\Support\Facades\Validator;

class NotificacionController extends Controller
{
    protected $notificacion;     

    public function __construct(Notificacion $notificacion)
    {
        $this->notificacion = $notificacion;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notificacion = $this->notificacion->all();
        if (count($notificacion)) {
            return ResponseController::response('success', $notificacion);
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
        $validator = Validator::make($request->all(), $this->notificacion->getRules());

        if ($validator->fails()) {
            return ResponseController::response('Todos los campos son requeridos', [], 404);
        }

        $input = $request->all();

        $save = $this->notificacion->create($input);

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
        $notificacion = $this->notificacion->find($id);
        if ($notificacion) {
            $notificacion->load(['conductores']);
            return ResponseController::response('success', $notificacion);
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
        $validator = Validator::make($request->all(), $this->notificacion->getRules());

        if ($validator->fails()) {
            return ResponseController::response('Todos los campos son requeridos', [], 404);
        }

        $input = $request->all();

        $notificacion = $this->notificacion->find($id);

        $save = $notificacion->update($input);

        if ($save) {
            return ResponseController::response('success', $notificacion);
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
        $notificacion = $this->notificacion->find($id);
        if ($notificacion) {
            if ($notificacion->delete()) {
                return ResponseController::response('success');
            }
            return ResponseController::response('fail', [], 400);
        }
        return ResponseController::response('Element not found', [], 404);
    }


    //

}
