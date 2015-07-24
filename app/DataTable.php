<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTable extends Model
{
    protected $table = 'DataTable';

    public function oprInfo()
    {
    	return $this->hasMany('App\OprValueTable');
    }
}
