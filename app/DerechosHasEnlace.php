<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DerechosHasEnlace extends Model
{
    use SoftDeletes;
    protected $table ='derechos_has_enlaces';

    public function derechos(){
        return $this->belongsTo('App\Derecho');
    }
    public function enlaces(){
        return $this->belongsTo('App\Enlace');
    }
}
