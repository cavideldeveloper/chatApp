<?php

namespace App\Traits;

use App\User as User;

trait GroupUsers
{
  public function users()
    {
        return $this->belongsToMany(User::class,'group_user','group_id', 'user_id')->withTimestamps();
    }

  public function user(){
    return $this->belongsTo(User::class,'user_id');
  }

  public function sender(){
    return $this->belongsTo(User::class,'from_id');
  }

  public function receiver(){
      return $this->belongsTo(User::class,'to_id');
  }

}