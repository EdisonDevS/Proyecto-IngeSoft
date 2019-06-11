<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function ceremony()
    {
    	return $this->hasOne('App\ceremony');
    }

    public function 	reception()
    {
    	return $this->hasOne('App\Reception');
    }

    public function honeymoon()
    {
    	return $this->hasOne('App\Honeymoon');
    }

    public function previousOrganization()
    {
    	return $this->hasOne('PreviousOrganization')
    }
}
