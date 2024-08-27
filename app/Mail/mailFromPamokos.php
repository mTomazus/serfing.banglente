<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailFromPamokos extends Mailable
{
    use Queueable, SerializesModels;

    protected $paslauga;
    protected $name;
    protected $address;
    protected $date;
    protected $email;
    protected $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($paslauga,$name,$address,$date,$email,$phone)
    {
        $this->paslauga = $paslauga;
        $this->name = $name;
        $this->address = $address;
        $this->date = $date;
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
        return $this->from('sales@banglente.com')->subject('Banglente Pamokos forma')->view('emails.fromPamokos')->with([
            'senderpaslauga' => $this->paslauga,
            'sendername' => $this->name,
            'senderaddress' => $this->address,
            'senderdate' => $this->date,
            'senderemail' => $this->email,
            'senderphone' => $this->phone,
        ]);
    }
}