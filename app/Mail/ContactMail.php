<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Message;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request; // Ajoutez cette ligne pour passer les données à la vue

    /**
     * Create a new message instance.
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('mawoutin92@gmail.com')
            ->subject('Contact Mail')
            ->view('contactVue', $this->request); 
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
