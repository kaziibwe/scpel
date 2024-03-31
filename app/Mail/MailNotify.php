<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     */
    // public property
    public $data;

    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     *
     */

    //   public function build(){
    //     return $this->from('alfredkaziibwe19@gmail.com','alpha')->subject($this->data['subject'])->view('emails.index')->with('success','check you email');
    //   }

    // public function build(){
    //     return $this->view('mails.hello');
    //   }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'velification code',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.hello',
            with:['data' => $this->data],
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
