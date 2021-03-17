<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Mail;

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

        Mail::send('mail',
        array(
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            ),
            function($comment){
                $comment->from('sales@banglente.com');
                $comment->cc('sales@banglente.com');
                $comment->to('sales@banglente.com')->subject('Banglente kontaktų Forma');
            }
        );
   
        $this->reset(['name', 'email', 'message']);
        session()->flash('message', 'Jūsų žinutė sėkmingai išsiųsta!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
