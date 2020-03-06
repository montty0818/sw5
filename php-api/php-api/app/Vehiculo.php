<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';

    protected $fillable = [
        'placa', 
        'tipo',
        'modelo'
    ];

    public function ordenes()
    {
        return $this->belongsToMany('App\Orden', 'orden_vehiculo');
    }    

     public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'placa'    => 'required',
            'tipo'        => 'required',
        ];
        return $rules;
    }    
}
