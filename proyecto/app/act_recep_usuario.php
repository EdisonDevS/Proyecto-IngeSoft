<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class act_recep_usuario extends Model
{
    public function actividad()
    {
    	return $this->hasOne('\App\ActividadRecepcion');
    }
}
