<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailFromContact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'message' => 'required|min:8',
        ]);
   
        Contact::create($validatedData);

        Mail::to('sales@banglente.com')->send(new mailFromContact($this->name, $this->email, $this->message));

        $this->reset(['name', 'email', 'message']);
        session()->flash('message', 'Jūsų žinutė sėkmingai išsiųsta!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
