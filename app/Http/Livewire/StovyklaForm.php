<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stovyklos;

class StovyklaForm extends Component
{
    public $pamaina;
    public $name;
    public $surname;
    public $address;
    public $age;
    public $swim;
    public $alergy;
    public $email;
    public $phone;
    

    public function submitStovyklaForm()
    {
        $validatedData = $this->validate([
            'pamaina' => 'required',
            'name' => 'required|min:4',
            'surname' => 'required|min:4',
            'address' => 'required|min:10',
            'age' => '',
            'swim' => '',
            'alergy' => '',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
   
        Stovyklos::create($validatedData);
           
        $this->reset(['name', 'alergy', 'age', 'swim' ]);
        session()->flash('message', 'Stovyklos registracija sėkmingai išsiųsta!');
    }

    public function render()
    {
        return view('livewire.stovykla-form');
    }
}
