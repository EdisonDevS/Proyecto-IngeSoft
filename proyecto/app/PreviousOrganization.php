<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreviousOrganization extends Model
{
    public function package()
    {
    	return $this->belogsTo('App\Package');
    }

    public function clothings()
    {
    	return $this->hasMany('App\Clothing');
    }

    public function rings()
    {
    	return $this->hasMany('App\Ring');
    }

    public function makeups()
    {
    	return $this->hasMany('App\Makeup');
    }
}
