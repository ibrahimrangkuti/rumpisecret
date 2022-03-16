<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateRoom extends Component
{
    public $name, $description;

    public function render()
    {
        return view('livewire.create-room');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|min:3',
        ]);

        $link = Str::random(15);

        User::create([
            'link' => $link,
            'name' => $this->name,
            'description' => $this->description
        ]);

        redirect()->route('room.show', $link);
    }
}
