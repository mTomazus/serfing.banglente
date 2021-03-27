<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailReplyStovykla extends Mailable
{
    use Queueable, SerializesModels;

    protected $pamaina;
    protected $name;
    protected $surname;
    protected $address;
    protected $age;
    protected $swim;
    protected $alergy;
    protected $email;
    protected $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pamaina,$name,$surname,$address,$age,$swim,$alergy,$email,$phone)
    {
        $this->pamaina = $pamaina;
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->age = $age;
        $this->swim = $swim;
        $this->alergy = $alergy;
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
        return $this->from('sales@banglente.com')->subject('Banglenčių Stovyklos Registracija')->view('emails.fromReply')->with([
            'senderpamaina' => $this->pamaina,
            'sendername' => $this->name,
            'sendersurname' => $this->surname,
            'senderaddress' => $this->address,
            'senderage' => $this->age,
            'senderswim' => $this->swim,
            'senderalergy' => $this->alergy,
            'senderemail' => $this->email,
            'senderphone' => $this->phone,
        ]);
    }
}
