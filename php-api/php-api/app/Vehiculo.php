<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'placa', 
        'tipo',
        'modelo'
    ];


     public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'placa'    => 'required',
            'tipo'        => 'required',
        ];
        return $rules;
    }    
}
