<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
   public function worker(){
       return $this->belongsTo(\App\User::class,'worker_id');
   }
   public function apache_child_terminate(){
    return $this->belongsTo(\App\User::class,'admin_id');
}
}
