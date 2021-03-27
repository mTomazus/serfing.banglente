<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pamokos;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailFromPamokos;

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

        Mail::to('sales@banglente.com')->send(new mailFromPamokos($this->paslauga, $this->name, $this->address, $this->date, $this->email, $this->phone));
           
        $this->reset(['name', 'email', 'address', 'date', 'phone']);
        session()->flash('message', 'Jūsų registracija sėkmingai išsiųsta!');
    }

    public function render()
    {
        return view('livewire.pamokos-form');
    }
}
