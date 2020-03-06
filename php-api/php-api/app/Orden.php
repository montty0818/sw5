<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orden extends Model
{
    use SoftDeletes;
    
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

    public function vehiculos()
    {
        return $this->belongsToMany('App\Vehiculo', 'orden_vehiculo');
    }
    
    public function conductores()
    {
        return $this->belongsToMany('App\Conductor', 'orden_conductor');
    }
    
    public function reportes()
    {
        return $this->belongsToMany('App\Reporte', 'orden_reporte');
    }    

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'descripcion'    => 'required',
            'codigo'        => 'required',
        ];
        return $rules;
    }    
}
