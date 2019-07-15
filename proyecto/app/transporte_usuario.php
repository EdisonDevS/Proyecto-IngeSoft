<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transporte_usuario extends Model
{

	protected $fillable = [
        'user_id', 'transporte_id'
    ];
    
    public function transporte()
    {
    	return $this->hasOne('\App\Transporte');
    }
}
