<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $senderName,
        public string $senderEmail,
        public string $phone = '',
        public string $formSubject = '',
        public string $userMessage = '',
        public string $pageUrl = '',
    ) {
        $this->phone       = $phone ?? '';
        $this->formSubject = $formSubject ?? '';
        $this->userMessage = $userMessage ?? '';
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'bbcpl.in New Contact Form Entry',
            replyTo: [new \Illuminate\Mail\Mailables\Address($this->senderEmail, $this->senderName)],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form',
        );
    }
}
