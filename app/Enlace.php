<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enlace extends Model
{
    use SoftDeletes;
    protected $table ='enlaces';

    public function subenlaces(){
    	return $this->hasMany('App\Subenlace');
    }
}
