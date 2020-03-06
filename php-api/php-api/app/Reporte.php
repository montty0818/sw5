<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reporte extends Model
{
    use SoftDeletes;
    
    protected $table = 'reportes';

    protected $fillable = [
        'descripcion'
    ];

    public function ordenes()
    {
        return $this->belongsToMany('App\Orden', 'orden_reporte');
    } 
    
    public static function getRules($is_update = false, $model = null)
    {
        $rules = [
            'descripcion'    => 'required'
        ];
        return $rules;
    }   
}
