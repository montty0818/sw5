<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entrega extends Model
{
    use SoftDeletes;
    
    protected $table = 'entregas';

    protected $fillable = [
        'destinatario', 
        'direccion',
        'estado',
        'tipo',
        'notas'
    ];

    public function orden()
    {
        return $this->belongsTo('App\Orden');
    }    

    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'destinatario'    => 'required',
            'direccion'        => 'required',
            'estado'   => 'required',
            'tipo'   => 'required',
            //'notas' => 'materiales de construccion, tipo losa y cemento',
        ];
        return $rules;
    }
}
