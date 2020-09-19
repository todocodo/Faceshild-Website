<?php

namespace App\Mail;

use illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->data = $request;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->subject(request()->subject)
                ->from(request()->email)
                ->to('shield@transgraph.eu')
                ->replyTo(request()->email)
                ->view('emails.contact');
            // ->with([
            //     'email' => $this->data->email,
            //     'subject' => $this->data->subject,
            //     'bodyMessage' => $this->data->message,
            // ]);
    }
}
