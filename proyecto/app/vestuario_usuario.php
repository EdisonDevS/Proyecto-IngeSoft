<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vestuario_usuario extends Model
{
    public function vestuario()
    {
    	return $this->hasOne('\App\Vestuario');
    }
}
