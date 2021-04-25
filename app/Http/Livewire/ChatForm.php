<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Chat;
use Auth;

class ChatForm extends Component
{
    public $message;
    public $user_id;
    public $name;

    public function mount()
    {
        if(Auth::user()){
        $this->name = Auth::user()->name;
        $this->user_id = Auth::user()->id;
        }
    }

    public function submitChat()
    {
        $validatedData = $this->validate([
            'message' => 'required|min:8',
            'name' => 'required',
            'user_id' => 'required',

        ]);
   
        Chat::create($validatedData);

        $this->reset('message');
        session()->flash('message', 'Ačiū!');
    }

    public function render()
    {
        return view('livewire.chat-form', [
            'lines' => Chat::all()->sortByDesc('created_at'),
        ]);
    }
}
