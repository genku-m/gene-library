<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public function tune(){
      return $this->hasMany('App\Tune');
    }
    public function artist(){
      return $this->belongsTo('App\Artist');
    }
}
