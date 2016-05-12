<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DerechosHasSubenlace extends Model
{
    use SoftDeletes;
    protected $table ='derechos_has_subenlaces';

    public function derechos(){
        return $this->belongsTo('App\Derecho');
    }
    public function subenlaces(){
        return $this->belongsTo('App\Subenlace');
    }
}
