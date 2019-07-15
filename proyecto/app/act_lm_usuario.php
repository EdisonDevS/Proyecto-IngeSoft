<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class act_lm_usuario extends Model
{
    public function actividad()
    {
    	return $this->hasOne('\App\ActividadLunaDeMiel');
    }
}
