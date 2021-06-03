<?php

namespace Cavideldeveloper\ChatApp\Http\Livewire;

use Livewire\Component;
use App\User;
use Pusher\Pusher;
use Cavideldeveloper\ChatApp\Models\ChatMessage as Message;
use Cavideldeveloper\ChatApp\Models\ChatGroup as Group;


 
class Chat extends Component
{

    public $currentTab = 1;
    public $users;
    private $pusher = null;
    public $chats;
    public $uchats = [];
    public $groups;
    public $messages = [];

    protected $listeners = ['refreshMessages'=>'getChats','groupCreated'=>'refreshGroups','refreshGroupMessage'=>'refreshGroups'];


    public function mount(){
        $this->users = User::where('id','!=',auth()->user()->id)->get();
        $this->groups = auth()->user()->chatGroups;
        $this->getChats();
    }

    public function getChats(){
        $this->chats = Message::where('from_id',auth()->user()->id)->orWhere('to_id',auth()->user()->id)->select(['from_id','to_id'])->distinct()->get();

        $message = ';';

        $this->messages = collect();
        foreach($this->chats as $chat){
            if($chat->from_id == auth()->user()->id){

                $message =  Message::where('from_id',$chat->from_id)->where('to_id',$chat->to_id)
                    ->orWhere('from_id',$chat->to_id)->where('to_id',$chat->from_id,)->latest()->first();

                array_push($this->uchats,$chat->to_id );

            }else{
                if($chat->from_id ){

                }
                $message =  Message::where('from_id',$chat->from_id)->where('to_id',$chat->to_id)
                    ->orWhere('from_id',$chat->from_id)->where('to_id',$chat->to_id)->latest()->first();

                array_push($this->uchats,$chat->from_id );
            }
            
            $this->messages->push($message);

        }
        $this->chats = array_unique($this->uchats);
        
    }

    public function refreshGroups(){
        $this->groups = auth()->user()->chatGroups;
    }

    public function createModal(){
        $this->emit('showGroupCreate');

    }

    public function instanPusher(){
        if($this->pusher == null){
            $this->pusher = new Pusher(config('app.pusher_app_key'), config('app.pusher_app_secret'), config('app.pusher_app_id'), array('cluster' => config('app.pusher_app_cluster')));
        }
    }

    public function doTrigger()
    {
        $this->instanPusher();
        $this->pusher->trigger('my-channel', 'my-event', array('message' => 'hello world'));
    }

    public function setMessageView($id){
        $this->getChats();
        $this->emit('messageViewId',$id);
    }

    public function setGroupView($id){
        $this->emit('groupViewId',$id);
    }

    public function render()
    {
        return view('chatApp::livewire.chat');
    }
}
