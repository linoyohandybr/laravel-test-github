<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //properties to pass to the view
    public $firstName;
    public $lastName;
    public $email;
    public $comment;

    public function __construct($firstName,$lastName,$email,$comment)
    {
        $this->firstName= $firstName;
        $this->lastName= $lastName;
        $this->email= $email;
        $this->comment=$comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email.view');
    }
}
