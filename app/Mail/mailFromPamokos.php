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
    protected $date;
    protected $name;
    protected $email;
    protected $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($paslauga,$date,$name,$email,$phone)
    {
        $this->paslauga = $paslauga;
        $this->date = $date;
        $this->name = $name;
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
        return $this->from($this->email)->subject('Banglente Pamokos forma')->view('emails.fromPamokos')->with([
            'senderpaslauga' => $this->paslauga,
            'senderdate' => $this->date,
            'sendername' => $this->name,
            'senderemail' => $this->email,
            'senderphone' => $this->phone,
        ]);
    }
}