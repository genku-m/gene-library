<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunePlayer extends Model
{
    public function player(){
      return $this->belongsTo('App\Player');
    }
    public function tune(){
      return $this->belongsTo('App\Tune');
    }
}
