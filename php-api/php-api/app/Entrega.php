<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $fillable = [
        'destinatario', 
        'direccion',
        'estado',
        'tipo',
        'notas'
    ];
}
