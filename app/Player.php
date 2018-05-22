<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function tune_player(){
      return $this->hasMany('App\TunePlayer');
    }
}
