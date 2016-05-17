<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Infoapp extends Model
{
    use SoftDeletes;
    protected $table ='infoapps';
}
