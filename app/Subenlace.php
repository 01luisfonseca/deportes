<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subenlace extends Model
{
    use SoftDeletes;
    protected $table ='subenlaces';

    public function derechos_has_subenlaces(){
    	return $this->hasMany('App\DerechosHasSubenlace');
    }
    public function subsubenlaces(){
    	return $this->hasMany('App\Subsubenlace');
    }
    public function enlaces(){
        return $this->belongsTo('App\Enlace');
    }
}
