<?php

namespace Cavideldeveloper\ChatApp\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GroupUsers;


class ChatMessage extends Model
{
    use GroupUsers;
    //
    protected $table   = 'messages';

    

}
