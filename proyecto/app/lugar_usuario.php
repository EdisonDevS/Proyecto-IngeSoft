<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar_usuario extends Model
{
    public function lugar()
    {
    	return $this->hasOne('\App\Lugar');
    }
}
