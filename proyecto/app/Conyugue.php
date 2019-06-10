<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conyugue extends Model
{

	protected $fillable = [
        'document', 'name', 'last_name', 'gender', 'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
