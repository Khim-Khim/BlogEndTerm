<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
      protected $table = 'status';
      protected $primaryKey = 'id_status';
       public function user(){
        return $this->hasMany('App\User','user_id','id');
     }
}
