<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anillo_usuario extends Model
{
    public function anillo()
    {
    	return $this->hasOne('\App\Anillos');
    }
}
