<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notificacion extends Model
{
    use SoftDeletes;
    
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
            'tipo'        => 'required',
            'mensaje'	 => 'required',
        ];
        return $rules;
    }   
}
