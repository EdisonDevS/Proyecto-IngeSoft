<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
	protected $fillable = [
        'name', 'email', 'password', 'last_name', 'phone',
    ];


    protected $hidden = [
        'password',
    ];
}
