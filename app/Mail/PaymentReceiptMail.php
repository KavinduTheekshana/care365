<?php

namespace App\Mail;

use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentReceiptMail extends Mailable
{
    use Queueable, SerializesModels;

    public $payment;
    public $guardianName;
    public $clientName;

    /**
     * Create a new message instance.
     */
    public function __construct(Payment $payment, string $guardianName, string $clientName)
    {
        $this->payment = $payment;
        $this->guardianName = $guardianName;
        $this->clientName = $clientName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Receipt - CARE 365',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.payment-receipt',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $client = $this->payment->client;
        $guardian = $client->guardians()->first();

        $pdfData = [
            'payment' => $this->payment,
            'client_name' => $client->name,
            'client_reg_number' => $client->reg_number,
            'branch_name' => $this->payment->branch->name ?? null,
            'guardian_name' => $guardian->name ?? null,
            'guardian_email' => $guardian->email ?? null,
            'guardian_phone' => $guardian->phone ?? null,
        ];

        $pdf = Pdf::loadView('pdf.payment-receipt', $pdfData);

        $filename = 'payment_receipt_' . str_pad($this->payment->id, 6, '0', STR_PAD_LEFT) . '.pdf';

        return [
            Attachment::fromData(fn () => $pdf->output(), $filename)
                ->withMime('application/pdf'),
        ];
    }
}
