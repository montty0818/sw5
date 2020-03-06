<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licencia extends Model
{
    use SoftDeletes;
    
    protected $table = 'licencias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
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
