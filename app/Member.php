<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //

    public function savings(){
        return $this->hasMany('App\Saving');
    }

    public $timestamps = false;
}
