<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $fillable = [
        'entrega_id', 
        'codigo',
        'descripcion'
    ];


}
