<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquillaje extends Model
{
    protected $fillable = [
        'description', 'price', 'image'
    ];
}
