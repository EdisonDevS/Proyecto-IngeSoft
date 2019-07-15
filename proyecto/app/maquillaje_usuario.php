<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maquillaje_usuario extends Model
{
    public function maquillaje()
    {
    	return $this->hasOne('\App\Maquillaje');
    }
}
