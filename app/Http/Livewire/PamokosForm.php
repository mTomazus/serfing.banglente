<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pamokos;

class PamokosForm extends Component
{
    public $paslauga;
    public $name;
    public $address;
    public $date;
    public $email;
    public $phone;
    

    public function submitPamokosForm()
    {
        $validatedData = $this->validate([
            'paslauga' => 'required',
            'name' => 'required|min:7',
            'address' => 'required|min:10',
            'date' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
   
        Pamokos::create($validatedData);
           
        $this->reset(['name', 'email', 'address', 'date', 'phone']);
        session()->flash('message', 'Jūsų registracija sėkmingai išsiųsta!');
    }

    public function render()
    {
        return view('livewire.pamokos-form');
    }
}
