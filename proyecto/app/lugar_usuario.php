<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar_usuario extends Model
{

	protected $fillable = [
        'usuario_id', 'lugar_id', 'estado'
    ];
    
    public function lugar()
    {
    	return $this->hasOne('\App\Lugar');
    }
}
