<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user_data; 
    //  * Create a new message instance.
    //  */
    public function __construct($user_data){
        $this-> user_data = $user_data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // Oggetto della mail
        return new Envelope(
            from:new Address('noreply@hackademy66.it', 'Hack66'),
            subject: 'Thanks for contacting us',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Contenuto della mail
        return new Content(
            view: 'mail.contact-mail',
        );
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
