<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $fillable = [
        'nombre',
        'tipo',
        'mensaje',
    ];

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'nombre'    => 'required',
            'tipo'        => 'required',
            'mensaje'	 => 'required',
        ];
        return $rules;
    }   
}
