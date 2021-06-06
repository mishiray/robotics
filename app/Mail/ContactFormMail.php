<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $letter;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($letter_data)
    {
        $this->letter = $letter_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactform')->subject($this->letter['subject']);
    }
}
