<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $success;

    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'message' => 'required|min:8',
        ]);
   
        Contact::create($validatedData);
   
        return redirect()->to('/form');
        $this->reset(['name', 'email', 'message']);
        $this->success = 'Your inquiry has been SUCCESSFULLY submited!';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
