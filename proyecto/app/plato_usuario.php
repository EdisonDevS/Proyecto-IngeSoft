<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plato_usuario extends Model
{
    public function plato()
    {
    	return $this->hasOne('\App\Plato');
    }
}
