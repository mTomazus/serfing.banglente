<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bureliai;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailFromBurelis;
use App\Mail\mailReplyBurelis;

class BurelisForm extends Component
{
    public $name;
    public $surname;
    public $age;
    public $email;
    public $phone;

    public function submitBurelisForm()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:4',
            'surname' => 'required|min:4',
            'age' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
   
        Bureliai::create($validatedData);

        Mail::to('sales@banglente.com')->send(new mailFromBurelis($this->name, $this->surname, $this->age, $this->email, $this->phone));
        
        Mail::to($this->email)->send(new mailReplyBurelis($this->name, $this->surname, $this->age, $this->email, $this->phone));

        $this->reset(['name', 'surname', 'age', 'email', 'phone']);
        session()->flash('message', 'Registracija sėkminga!');
    }

    public function render()
    {
        return view('livewire.burelis-form');
    }
}
