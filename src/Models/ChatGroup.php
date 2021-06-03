<?php

namespace Cavideldeveloper\ChatApp\Models;

use App\Traits\GroupUsers;

use Illuminate\Database\Eloquent\Model;

class ChatGroup extends Model
{
    use GroupUsers;

    protected $fillable = [
        'name'
    ];

    // public function users()
    // {
    //     return $this->belongsToMany(User::class,'group_user','group_id', 'user_id')->withTimestamps();
    // }

    public function messages(){
        return $this->hasMany(GroupConversation::class,'group_id');
    }

}
