<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conductor extends Model
{
    use SoftDeletes;
    
    protected $table = 'conductores';

    protected $fillable = [
        'cedula', 
        'nombre',
        'estado'
    ];

    public function ordenes()
    {
        return $this->belongsToMany('App\Orden', 'orden_conductor');
    }
    
    public function licencias()
    {
        return $this->belongsToMany('App\Licencia', 'conductor_licencia');
    }

    public function notificaciones()
    {
        return $this->belongsToMany('App\Notificacion', 'conductor_notificacion');
    }    

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
