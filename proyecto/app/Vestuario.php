<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vestuario extends Model
{
    protected $fillable = [
        'talla', 'image', 'description', 'price'
    ];
}
