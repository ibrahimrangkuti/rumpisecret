<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class RoomMessage extends Component
{
    public $user;

    protected $listeners = ['messageStore' => 'render'];

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        $link = $this->user->link;

        return view('livewire.room-message', [
            'messages' => Message::where('user_link', $link)->orderBy('id', 'desc')->get()
        ]);
    }
}
