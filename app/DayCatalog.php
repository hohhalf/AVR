<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayCatalog extends Model
{
     protected $table = 'DayCatalog';

     public function oprValue()
    {
    	return $this->hasMany('App\OprValueTable');
    }
}
