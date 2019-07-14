<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anillo extends Model
{
    protected $fillable = [
        'talla', 'description', 'price','image'
    ];
}
