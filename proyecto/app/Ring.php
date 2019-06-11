<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ring extends Model
{
    public function previousOrganization()
    {
    	return $this->belogsTo('App\PreviousOrganization');
    }
}
