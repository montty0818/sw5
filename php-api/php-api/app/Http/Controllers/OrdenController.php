<?php

namespace App\Http\Controllers;

use App\Orden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdenController extends Controller
{

    protected $orden;     

    public function __construct(Orden $orden)
    {
        $this->orden = $orden;
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 1;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 2;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->orden->getRules());

        if ($validator->fails()) {
            return ResponseController::response('Todos los campos son requeridos', [], 404);
        }

        $input = $request->all();

        $save = $this->orden->create($input);

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
        $orden = $this->orden->find($id);
        $orden->load(['entrega', 'vehiculos', 'conductores']);
        if ($orden) {
            return ResponseController::response('success', $orden);
        }
        return ResponseController::response('fail', [], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 4;
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
        return 5;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 6;
    }
}
