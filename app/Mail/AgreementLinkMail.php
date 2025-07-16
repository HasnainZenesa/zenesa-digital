<?php

// app/Mail/AgreementLinkMail.php
namespace App\Mail;

use Illuminate\Mail\Mailable;

class AgreementLinkMail extends Mailable
{
    public $link;
    public $userName;

    public function __construct($link,$userName)
    {
        $this->link = $link;
      $this->userName = $userName;
    }

    public function build()
{
    return $this->subject('Your Agreement Link')
                ->view('emails.agreement-link')
                ->with(['link' => $this->link,
                'userName' => $this->userName,
            ]);
}
}
