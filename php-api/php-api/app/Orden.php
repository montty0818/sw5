<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';

    protected $fillable = [
        'entrega_id', 
        'codigo',
        'descripcion'
    ];

    public function entrega()
    {
        return $this->hasOne('App\Entrega', 'id');
    }

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'entrega_id'    => 'required',
            'codigo'        => 'required',
        ];
        return $rules;
    }    
}
