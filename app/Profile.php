<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    function myantre(){
        return $this->hasMany('App\Miniproject','user_id','id');
    }
}
