<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'guide', 
        'status',
        'vehicle',
        'observation'
    ];
    
}
