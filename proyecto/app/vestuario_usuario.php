<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vestuario_usuario extends Model
{
	protected $fillable = [
        'user_id',
    ];
    
    public function vestuario()
    {
    	return $this->hasOne('\App\Vestuario');
    }
}
