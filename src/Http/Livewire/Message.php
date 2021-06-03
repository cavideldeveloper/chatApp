<?php

namespace Cavideldeveloper\ChatApp\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $message;
    public $type;

    public function render()
    {
        return view('chatApp::livewire.message');
    }
}
