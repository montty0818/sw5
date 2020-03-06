<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $fillable = [
        'destinatario', 
        'direccion',
        'estado',
        'tipo',
        'notas'
    ];

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'destinatario'    => 'required',
            'direccion'        => 'required',
            'estado'   => 'required',
            'tipo'   => 'required',
            'notas' => 'materiales de construccion, tipo losa y cemento',
        ];
        return $rules;
    }
}
