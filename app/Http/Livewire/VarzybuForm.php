<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Varzybos;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailFromVarzybos;
use App\Mail\mailReplyVarzybos;

class VarzybuForm extends Component
{
    public $name;
    public $surname;
    public $date;
    public $gender_id;
    public $division_id;
    public $email;
    public $phone;

    public function submitVarzybuForm()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:4',
            'surname' => 'required|min:4',
            'date' => 'required',
            'division_id' => 'required',
            'gender_id' => 'required',
            'phone' => 'required|unique:varzybos',
            'email' => 'required|email|unique:varzybos',
        ]);
   
        Varzybos::create($validatedData);

        Mail::to('sales@banglente.com')->send(new mailFromVarzybos($this->name, $this->surname, $this->division_id, $this->email, $this->phone));
        
        Mail::to($this->email)->send(new mailReplyVarzybos($this->name, $this->surname, $this->division_id, $this->email, $this->phone));

        $this->reset(['name', 'surname', 'date', 'gender_id', 'division_id', 'email', 'phone']);
        session()->flash('message', 'Registracija sėkminga!');
    }

    public function render()
    {
        return view('livewire.varzybu-form');
    }
}
