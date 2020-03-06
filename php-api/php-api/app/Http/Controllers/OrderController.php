<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Creating every logic inside the controller 
     * for speeding process
     * 
     * if you are watching these please don't do that and use a repository
     *
     */

    /**
     * @var OrderModel
     */
    protected $order;     

    public function __construct(Order $order)
    {
        $this->order = $order;
    }  
      
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = $this->order->find($id);
        if ($order) {
            return ResponseController::response('success', $order);
        }
        return ResponseController::response('fail', [], 404);
    }

    public function report_incident(int $order_id, Request $request)
    {
        $order = $this->order->find($order_id);
        if ($order) {
            $incident = $request->input('incident');
            $order->observation = $incident;
            if ($order->save()) {
                return ResponseController::response('success', $order);
            }
            return ResponseController::response('fail', [], 304);
        }
        return ResponseController::response('fail', [], 404);
    }      

   

    //Autogenerated for speeding process
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
