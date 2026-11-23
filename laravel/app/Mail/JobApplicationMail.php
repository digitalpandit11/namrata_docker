<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $applicantName,
        public string $applicantEmail,
        public string $phone,
        public string $position,
        public string $coverLetter,
        public string $cvPath,
        public string $cvOriginalName,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Job Application: ' . $this->position,
            replyTo: [new \Illuminate\Mail\Mailables\Address($this->applicantEmail, $this->applicantName)],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application',
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromStorageDisk('local', $this->cvPath)
                ->as($this->cvOriginalName),
        ];
    }
}
