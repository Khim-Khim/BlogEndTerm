<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
      protected $table = 'comments';
      protected $primaryKey = 'id';
      public function status(){
            return $this->hasMany('App\status','id_status', 'id');
      }
      public function user(){
            return $this->belongsTo('App\User','id_user', 'id');
      }
}
