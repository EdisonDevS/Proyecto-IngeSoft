<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class act_lm_usuario extends Model
{

	protected $fillable = [
        'user_id','actividad_luna_de_miel_id'
    ];

    public function actividad()
    {
    	return $this->hasOne('\App\ActividadLunaDeMiel');
    }
}
