<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maquillaje_usuario extends Model
{	
	protected $fillable = [
        'user_id', 'maquillaje_id'
    ];


    public function maquillaje()
    {
    	return $this->hasOne('\App\Maquillaje');
    }
}
