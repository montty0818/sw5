<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $fillable = [
        'cedula', 
        'nombre',
        'estado'
    ];
}
