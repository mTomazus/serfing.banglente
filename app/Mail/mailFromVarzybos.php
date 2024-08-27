<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailFromVarzybos extends Mailable
{
    use Queueable, SerializesModels;


    protected $name;
    protected $surname;
    protected $division;
    protected $email;
    protected $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$surname,$division,$email,$phone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->division = $division;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sales@banglente.com')->subject('Registracija į varžybas')->view('emails.fromVarzybos')->with([
            'sendername' => $this->name,
            'sendersurname' => $this->surname,
            'senderdivision' => $this->division,
            'senderemail' => $this->email,
            'senderphone' => $this->phone,
        ]);
    }
}
