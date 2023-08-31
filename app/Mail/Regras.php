<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Regras extends Mailable
{
    use Queueable, SerializesModels;

    public $idregra;
    public $conditionsregra;
    public $acoes;

    public function __construct($idregra,$conditionsregra,$acoes)
    {
        $this->idregra = $idregra;
        $this->conditionsregra = $conditionsregra;
        $this->acoes = $acoes;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('info.smartfarm2023@gmail.com','SmartFarm'),
            subject: 'Regra acionada',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'regraemail',
            with: [ 'idregra' => $this->idregra,
                    'conditionsregra' => $this->conditionsregra,
                    'acoes' => $this->acoes

            ],
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
