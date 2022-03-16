<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('home', [
            'users' => User::all(),
            'title' => 'Chat'
        ]);
    }

    public function show($link)
    {
        $user = User::where('link', $link)->first();

        return view('room.show', [
            'user' => $user,
            'messages' => Message::where('user_link', $link)->orderBy('id', 'desc')->get(),
            'title' => $user->name,
        ]);
    }
}
