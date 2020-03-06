<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $table = 'licencias';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function conductores()
    {
        return $this->belongsToMany('App\Conductor', 'conductor_licencia');
    }

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'nombre'    => 'required',
            'descripcion'  => 'required',
        ];
        return $rules;
    }
}
