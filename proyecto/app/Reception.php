<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    public function package()
    {
    	return $this->belogsTo('App\Package');
    }
}
