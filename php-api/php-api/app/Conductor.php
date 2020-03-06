<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $fillable = [
        'cedula', 
        'nombre',
        'estado'
    ];

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'cedula'   => 'required',
            'nombre'   => 'required',
            'estado'   => 'required',
        ];
        return $rules;
    }
}
