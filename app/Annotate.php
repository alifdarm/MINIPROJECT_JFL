<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annotate extends Model
{
    //
    protected $table = 'annotate';

    protected $guarded = [];

    public function myannotate_instansi() {
        return $this->hasMany('App\User','antrian_id','id');
    }

}
