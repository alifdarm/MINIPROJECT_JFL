<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    //
    protected $table = 'instansi';

    function myinstansi() {
        return $this->hasMany('App\Miniproject','instansi_id','id');
    }
}
