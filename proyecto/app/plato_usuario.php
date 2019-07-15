<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plato_usuario extends Model
{
	protected $fillable = [
        'user_id',
    ];
    
    public function plato()
    {
    	return $this->hasOne('\App\Plato');
    }
}
