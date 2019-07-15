<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plato_usuario extends Model
{
	protected $fillable = [
        'user_id', 'plato_id'
    ];
    
    public function plato()
    {
    	return $this->hasMany(Plato::class, 'plato_usuario', 'usuario_id', 'plato_id');
    }
}
