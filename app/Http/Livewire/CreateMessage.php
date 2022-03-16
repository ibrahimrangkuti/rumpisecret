<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class CreateMessage extends Component
{
    public $user, $message;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.create-message');
    }

    public function store()
    {
        $messages = Message::where('user_link', $this->user->link)->get();

        $this->validate([
            'message' => 'required|string|min:3'
        ]);

        Message::create([
            'user_link' => $this->user->link,
            'message' => $this->message
        ]);

        $this->message = '';

        $this->emit('messageStore');

        if ($messages->count() < 1) {
            redirect()->route('room.show', $this->user->link);
        }
    }
}
