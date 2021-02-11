<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:10',
            'email' => 'required|email',
            'message' => 'required',
        ]);
   
        Contact::create($validatedData);
   
        return redirect()->to('/form');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
