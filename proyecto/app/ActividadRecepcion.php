<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadRecepcion extends Model
{
    protected $fillable = [
        'name', 'description', 'price','image'
    ];
}
