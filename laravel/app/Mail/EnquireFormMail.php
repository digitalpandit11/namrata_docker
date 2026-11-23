<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquireFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $name,
        public string $phone,
        public string $email = '',
        public string $pageUrl = '',
    ) {
        $this->email = $email ?? '';
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'bbcpl.in New Enquiry Form Submission',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquire-form',
        );
    }
}
