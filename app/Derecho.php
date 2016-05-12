<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Derecho extends Model
{
    use SoftDeletes;
    protected $table ='derechos';

    public function users(){
    	return $this->hasMany('App\User');
    }
    public function derechos_has_subenlaces(){
    	return $this->hasMany('App\DerechosHasSubenlace');
    }
     public function derechos_has_subsubenlaces(){
    	return $this->hasMany('App\DerechosHasSubsubenlace');
    }
}
