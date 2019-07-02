<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    protected $fillable = [
        'emaasunto', 'prioridad', 'contenido', 'user_id', 'estado'
    ];
}
