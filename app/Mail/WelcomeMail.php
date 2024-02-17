<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data,)
    {
        $this->data = $data;
    }

    public function build()
    {
        $this->withSwiftMessage(function ($message) {
            $message->setHeaders([
                'X-My-Header' => 'my-header-value',
                'Content-Type' => 'text/html; charset=UTF-8',
                'Content-Transfer-Encoding' => 'base64',
            ]);
        });
        $this->view('email.wellcome', [
            'body' => $this->data['body'],
        ])->subject($this->data['subject']);
    }
   
}
