<?php

namespace App\Traits;

use Cavideldeveloper\ChatApp\Models\ChatGroup;

trait UserGroups
{

  public function chatGroups()
  {
    return $this->belongsToMany(ChatGroup::class, 'group_user','user_id', 'group_id');
  }

  
}