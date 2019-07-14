<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    protected $fillable = [
        'name', 'type', 'description', 'price', 'image'
    ];
}
