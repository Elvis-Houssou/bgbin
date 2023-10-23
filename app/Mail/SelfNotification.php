<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
// use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SelfNotification extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     */
    public function __construct(public Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('bgbincreations@gmail.com', 'BGBIN'),
            subject: 'Nouvelle Commande',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'self_notification',
            with: [
                'orderEmail' => $this->order->email,
                'orderPhone' => $this->order->phone,
                'orderMesure' => $this->order->mesure,
                'orderDoublure' => $this->order->doublure,
                'orderDescription' => $this->order->description,
                'orderCategorie' => $this->order->categories->gender,
                'orderSubCategorie' => $this->order->sub_categories->type,
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
        // $imagePath = public_path('images/' . $this->order->images);
        // $bandesPath = public_path('images/' . $this->order->bands->images);
        $test = Attachment::fromPath('images/' . $this->order->images)
            ->as('Exemple de Commande')
            ->withMime('image/jpeg');

        $second = Attachment::fromPath('images/' . $this->order->bands->images)
            ->as('Bande')
            ->withMime('image/jpeg');

        return [
           $test,
            $second,
            // $imagePath,
            // $bandesPath,
        ];
    }
}
