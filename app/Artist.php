<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function library(){
      return $this->hasMany('App\Library');
    }
}
