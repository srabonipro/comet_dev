<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WednesdayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $wednesday_offer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($wednesday)
    {
        $this->wednesday_offer = $wednesday;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.wednesday');
    }
}
