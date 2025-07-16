<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class AgreementPDFMail extends Mailable
{
    public $pdfPath;

    public function __construct($pdfPath)
    {
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->view('emails.agreement-pdf')
                    ->attach(storage_path('app/public/' . $this->pdfPath), [
                        'as' => 'agreement.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
