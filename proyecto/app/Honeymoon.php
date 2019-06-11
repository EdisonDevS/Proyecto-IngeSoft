<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honeymoon extends Model
{
    public function package()
    {
    	return $this->belogsTo('App\Package');
    }
}
