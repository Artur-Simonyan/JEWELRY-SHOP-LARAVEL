<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailProductClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $msg;
    protected $email;
    protected $user;
    protected $stone;
    protected $price;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $msg, $email, $user, $stone, $price)
    {
        $this->name = $name;
        $this->email = $email;
        $this->msg = $msg;
        $this->user = $user;
        $this->stone = $stone;
        $this->price = $price;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailMessages/mailMessage')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'msg' => $this->msg,
                'stone' => $this->stone,
                'user' => $this->user,
                'price' => $this->price
            ])->subject('Новое Письмо');
    }
}
