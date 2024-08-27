<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailReplyBurelis extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $surname;
    protected $age;
    protected $email;
    protected $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$surname,$age,$email,$phone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
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
        return $this->from('sales@banglente.com')->subject('Varžybų Registracija')->view('emails.fromReplyBurelis')->with([
            'sendername' => $this->name,
            'sendersurname' => $this->surname,
            'senderage' => $this->age,
            'senderemail' => $this->email,
            'senderphone' => $this->phone,
        ]);
    }
}
