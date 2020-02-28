<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client', 
        'seller',
        'guide',
        'status'
    ];

    public function routes()
    {
        return $this->hasMany('App\Route');
    }    
}
