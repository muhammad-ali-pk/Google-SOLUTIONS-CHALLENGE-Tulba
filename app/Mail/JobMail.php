<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobMail extends Mailable
{
    use Queueable, SerializesModels;
    public $applicantData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicantData)
    {
        $this->applicantData=$applicantData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.jobApplication')->with(['applicantData'=>$this->applicantData]);
    }
}
