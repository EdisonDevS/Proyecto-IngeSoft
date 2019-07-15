<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anillo_usuario extends Model
{

	protected $fillable = [
        'user_id',
    ];

    public function anillo()
    {
    	return $this->hasOne('\App\Anillos');
    }
}
