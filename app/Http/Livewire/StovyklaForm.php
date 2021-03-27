<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stovyklos;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailFromStovykla;
use App\Mail\mailReplyStovykla;

class StovyklaForm extends Component
{
    public $pamaina;
    public $name;
    public $surname;
    public $address;
    public $age = '12';
    public $swim = 'gerai';
    public $alergy = 'ne';
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

        Mail::to('sales@banglente.com')->send(new mailFromStovykla($this->pamaina, $this->name, $this->surname, $this->address, $this->age, $this->swim, $this->alergy, $this->email, $this->phone));
        
        Mail::to($this->email)->send(new mailReplyStovykla($this->pamaina, $this->name, $this->surname, $this->address, $this->age, $this->swim, $this->alergy, $this->email, $this->phone));

        $this->reset(['name', 'alergy', 'age', 'swim' ]);
        session()->flash('message', 'Stovyklos registracija sėkmingai išsiųsta!');
    }

    public function render()
    {
        return view('livewire.stovykla-form');
    }
}
