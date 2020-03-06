<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificaciones';

    protected $fillable = [
        'nombre',
        'tipo',
        'mensaje',
    ];

    public function conductores()
    {
        return $this->belongsToMany('App\Conductor', 'conductor_notificacion');
    }       

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
