<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subsubenlace extends Model
{
    use SoftDeletes;
    protected $table ='subsubenlaces';

    public function derechos_has_subenlaces(){
    	return $this->hasMany('App\DerechosHasSubsubenlace');
    }
    public function subenlaces(){
        return $this->belongsTo('App\Subenlace');
    }
}
