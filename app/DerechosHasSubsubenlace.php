<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DerechosHasSubsubenlace extends Model
{
    use SoftDeletes;
    protected $table ='derechos_has_subsubenlaces';

    public function derechos(){
        return $this->belongsTo('App\Derecho');
    }
    public function subsubenlaces(){
        return $this->belongsTo('App\Subsubenlace');
    }
}
