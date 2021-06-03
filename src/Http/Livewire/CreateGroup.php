<?php

namespace Cavideldeveloper\ChatApp\Http\Livewire;

use Livewire\Component;
use App\User;
use Cavideldeveloper\ChatApp\Models\ChatGroup as Group;
use Pusher\Pusher;



class CreateGroup extends Component
{
    public $showModal = false;
    public $name;
    public $selected;
    public $users;
    private $pusher = null;



    protected $listeners = ['showGroupCreate'];

    public function mount(){
        $this->users = User::where('id','!=',auth()->user()->id)->get();
        
    }

    public function showGroupCreate(){
        $this->showModal = true;
    }

    public function save(){
        $group = Group::create(['name' => $this->name]);

        array_push($this->selected,auth()->user()->id);
    
        $users = collect($this->selected);
    
        $group->users()->attach($users);

        $this->emit('groupCreated');

        $this->showModal = false;
        
        $this->instanPusher();

        $this->pusher->trigger('my-channel', 'new-group', array('users' => $this->selected));
        $this->selected = '';
        $this->name = '';
    }

    public function instanPusher(){
        if($this->pusher == null){
            $this->pusher = new Pusher(config('app.pusher_app_key'), config('app.pusher_app_secret'), config('app.pusher_app_id'), array('cluster' => config('app.pusher_app_cluster')));
        }
    }

    public function render()
    {
        return view('chatApp::livewire.create-group');
    }
}
