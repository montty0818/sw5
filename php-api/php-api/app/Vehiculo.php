<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiculo extends Model
{
    use SoftDeletes;
    
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
            'modelo'    => 'required'
        ];
        return $rules;
    }    
}
