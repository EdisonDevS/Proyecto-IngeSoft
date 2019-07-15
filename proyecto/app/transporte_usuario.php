<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transporte_usuario extends Model
{
    public function transporte()
    {
    	return $this->hasOne('\App\Transporte');
    }
}
