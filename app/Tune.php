<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tune extends Model
{
    public function tune_player(){
      return $this->hasMany('App\TunePlayer');
    }
    public function library(){
      return $this->belongsTo('App\Library');
    }
}
