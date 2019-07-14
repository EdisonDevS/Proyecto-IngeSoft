<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadLunaDeMiel extends Model
{
    protected $fillable = [
        'name', 'description', 'price','image'
    ];
}
