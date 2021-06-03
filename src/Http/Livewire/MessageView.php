<?php

namespace Cavideldeveloper\ChatApp\Http\Livewire;

use Livewire\Component;
use App\User;
use Cavideldeveloper\ChatApp\Models\ChatMessage as Message;
use Pusher\Pusher;



class MessageView extends Component
{
    public  $viewId = null;
    public $user = null;
    public $message = '';
    public $messages;
    private $pusher = null;


    protected $listeners = ['messageViewId','refreshMessages'];

    public function messageViewId($id){
        $this->viewId = $id;
        $this->user = User::find($id);
        $this->messages = Message::where('from_id',auth()->user()->id)->where('to_id',$this->viewId)
        ->orWhere('from_id',$this->viewId)->where('to_id',auth()->user()->id)->orderBy('created_at','asc')->get();
    }

    public function refreshMessages(){
        $this->messages = Message::where('from_id',auth()->user()->id)->where('to_id',$this->viewId)
        ->orWhere('from_id',$this->viewId)->where('to_id',auth()->user()->id)->orderBy('created_at','asc')->get();

    }

    public function saveMessage(){

        $messageID = mt_rand(9, 999999999) + time();
        if($this->message != ''){
            $message = new Message();
            $message->id = $messageID;
            $message->type = 'msg';
            $message->from_id = auth()->user()->id;
            $message->to_id = $this->viewId;
            $message->body = $this->message;
            $message->attachment = 'no attachment';
            $message->save();

            $this->message = '';

            $this->messages = Message::where('from_id',auth()->user()->id)->where('to_id',$this->viewId)
            ->orWhere('from_id',$this->viewId)->where('to_id',auth()->user()->id)->orderBy('created_at','asc')->get();
            
            $this->emit('refreshMessages');
            
            $this->instanPusher();

            $this->pusher->trigger('my-channel', 'new-message-'.$this->viewId, array('view' => ''));

        }

    }

    public function clearChat(){
        foreach($this->messages as $message){
            $message->delete();
        }

        $this->messages = Message::where('from_id',auth()->user()->id)->where('to_id',$this->viewId)
        ->orWhere('from_id',$this->viewId)->where('to_id',auth()->user()->id)->orderBy('created_at','asc')->get();

        $this->emit('refreshMessages');

        $this->instanPusher();

        $this->pusher->trigger('my-channel', 'new-message-'.$this->viewId, array('view' => ''));

    }
    
    public function instanPusher(){
        if($this->pusher == null){
            $this->pusher = new Pusher(config('app.pusher_app_key'), config('app.pusher_app_secret'), config('app.pusher_app_id'), array('cluster' => config('app.pusher_app_cluster')));
        }
    }

    public function render()
    {
        return view('chatApp::livewire.message-view');
    }
}
