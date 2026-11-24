<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public string $contactName,
        public string $contactEmail,
        public string $contactMessage,
        public ?string $contactSubject = null,
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $fromAddress = config('mail.from.address') && config('mail.from.address') !== 'hello@example.com'
            ? config('mail.from.address')
            : (env('MAIL_USERNAME') ?: 'vlaix24@gmail.com');

        return new Envelope(
            from: new Address($fromAddress, config('mail.from.name') ?: 'Reyvaldi Portfolio Contact'),
            replyTo: [
                new Address($this->contactEmail, $this->contactName),
            ],
            subject: 'Portfolio Contact: '.($this->contactSubject ?: "New message from {$this->contactName}"),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
