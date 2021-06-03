<?php

namespace Cavideldeveloper\ChatApp\Http\Livewire;

use Livewire\Component;
use App\User;
use Cavideldeveloper\ChatApp\Models\ChatGroup as Group;
use Pusher\Pusher;
use Cavideldeveloper\ChatApp\Models\GroupConversation as Message;


class GroupMessageView extends Component
{
    public $group;
    public  $viewId = null;
    public $message = '';
    public $messages;
    private $pusher = null;



    protected $listeners = ['groupViewId','refreshGroupMessage'];

    public function groupViewId($id){
        $this->viewId = $id;
        $this->group = Group::find($id);
        

        $this->messages = Message::where('group_id',$this->viewId)->orderBy('created_at','asc')->get();
    }

    public function refreshGroupMessage(){
        $this->messages = Message::where('group_id',$this->viewId)->orderBy('created_at','asc')->get();
    }

    public function saveMessage(){

        if($this->message != ''){
            $message = new Message();
            // $message->id = $messageID;
            // $message->type = 'msg';
            $message->user_id = auth()->user()->id;
            $message->group_id = $this->viewId;
            $message->message = $this->message;
            // $message->attachment = 'no attachment';
            $message->save();

            $this->message = '';

            $this->messages = Message::where('group_id',$this->viewId)->orderBy('created_at','asc')->get();
            
            $this->emitTo('chat','refreshGroupMessage');
            
            $this->instanPusher();

            $toUsers = $this->group->users->where('id','!=',auth()->user()->id)->toArray();

            $this->pusher->trigger('my-channel', 'new-group-message', array('users' => $toUsers ));

        }
    }

    public function instanPusher(){
        if($this->pusher == null){
            $this->pusher = new Pusher(config('app.pusher_app_key'), config('app.pusher_app_secret'), config('app.pusher_app_id'), array('cluster' => config('app.pusher_app_cluster')));
        }
    }

    public function render()
    {
        return view('chatApp::livewire.group-message-view');
    }
}
