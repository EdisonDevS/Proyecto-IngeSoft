<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $fillable = [
        'name', 'type', 'description', 'price', 'image'
    ];
}
