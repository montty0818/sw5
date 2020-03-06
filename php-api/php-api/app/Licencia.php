<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'nombre'    => 'required',
            'descripcion'  => 'required',
        ];
        return $rules;
    }
}
