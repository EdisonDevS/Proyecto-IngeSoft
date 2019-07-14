<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $fillable = [
        'name', 'type', 'detail', 'description', 'price', 'image'
    ];
}
