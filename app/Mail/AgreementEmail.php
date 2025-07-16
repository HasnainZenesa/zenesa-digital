<?php

namespace App\Mail;

use Barryvdh\DomPDF\PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class AgreementEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $clientName;
    public $userEmail;
    public $contactNumber;
    public $address;
    public $agreementDate;
    public $agreementText;
    public $signatureData;
    public $paymentAmount;
    public $scopeOfServices; // Added field
    public $paymentTerms; // Added field

    public function __construct($clientName, $userEmail, $contactNumber, $address, $agreementDate, $agreementText, $signatureData, $paymentAmount, $scopeOfServices, $paymentTerms)
    {
        $this->clientName = $clientName;
        $this->userEmail = $userEmail;
        $this->contactNumber = $contactNumber;
        $this->address = $address;
        $this->agreementDate = $agreementDate;
        $this->agreementText = $agreementText;
        $this->signatureData = $signatureData;
        $this->paymentAmount = $paymentAmount;
        $this->scopeOfServices = nl2br($scopeOfServices); // Convert new lines to <br>
        $this->paymentTerms = nl2br($paymentTerms);
    }

    public function build()
    {
        // Apply nl2br to preserve line breaks
        $formattedAgreementText = nl2br($this->agreementText);

        // Updated HTML structure
        $htmlContent = "
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 12px;
                line-height: 1.5;
            }
            .header {
                text-align: center;
                margin-bottom: 20px;
            }
            .header img {
                max-width: 150px;
            }
            .agreement-content {
                text-align: justify;
                margin-top: 20px;
            }
            .signature-container {
                text-align: center;
                margin-top: 20px;
            }
            .signature-container img {
                max-width: 50%;
                border: 1px solid #ccc;
            }
            .footer {
                margin-top: 20px;
                font-size: 11px;
                text-align: center;
            }
        </style>

        <div class='header'>
            <img src='{{ asset('assets/images/logo.webp') }}' alt='Company Logo'>
        </div>

        <div class='agreement-content'>
            <p>This Book Publishing Services Agreement (the 'Agreement') is made and entered into on this {$this->agreementDate} by and between:</p>

            <p><strong>Amz Book Publish</strong><br>
            (Hereinafter referred to as the 'Publisher')<br>
            Address: 801 Travis St Houston, TX 77002<br>
            Contact: 832-906-3700<br>
            Email: info@amzbookpublish.com</p>

            <p>and</p>

            <div class='agreement-content'>
                <p><strong>Client Name:</strong> {$this->clientName}</p>
                <p><strong>Client Email:</strong> {$this->userEmail}</p>
                <p><strong>Contact Number:</strong> {$this->contactNumber}</p>
                <p><strong>Address:</strong> {$this->address}</p>
                <p><strong>Agreement Date:</strong> {$this->agreementDate}</p>

                <h3>1. Scope of Services</h3>
                <p>{$this->scopeOfServices}</p>

                <h3>2. Payment Terms</h3>
                <p>{$this->paymentTerms}</p>

                <h3>3. Payment Amount</h3>
                <p>The Author agrees to pay the Publisher a total fee of <strong>\${$this->paymentAmount}</strong>.</p>

                <h3>4. Deliverables</h3>
                <p>The finalized Work will be delivered in the agreed formats (eBook, paperback, and hardcover) within <strong>30 days</strong> from the date of this Agreement, provided all necessary materials and approvals are received in a timely manner.</p>

                <h3>5. Author’s Responsibilities</h3>
                <p>The Author must provide all necessary materials, including the manuscript, images, and any additional assets for the book cover design.</p>

                <h3>6. Ownership & Rights</h3>
                <p>The Author retains <strong>100% ownership</strong> of the Work, including all copyrights. The Publisher will not hold any rights to the content.</p>

                <h3>7. ISBN & Distribution</h3>
                <p>The Publisher will provide an ISBN and barcode and facilitate distribution on Amazon Kindle and Barnes & Noble. The Author will set pricing and royalties.</p>

                <h3>8. Revisions & Approvals</h3>
                <p>The Publisher will provide unlimited revisions during the production process. The Author must approve each stage before moving forward.</p>

                <h3>9. Confidentiality</h3>
                <p>Both parties agree to maintain confidentiality for all sensitive information exchanged during the course of this Agreement.</p>

                <h3>10. Termination</h3>
                <p>The Agreement may be terminated with written notice if obligations are not fulfilled. A refund will be issued for services not yet rendered.</p>

                <h3>11. Dispute Resolution</h3>
                <p>Disputes will be resolved through negotiation or binding arbitration under Texas law.</p>

                <h3>12. Governing Law</h3>
                <p>This Agreement is governed by the laws of the State of Texas.</p>

                <h3>13. Entire Agreement</h3>
                <p>This Agreement represents the entire understanding between the parties.</p>

                <div class='signature-container'>
                    <h4>Signature:</h4>
                    <img src='{$this->signatureData}' alt='Signature'>
                </div>

                <div class='footer'>
                    <p>Regards,</p>
                    <p><strong>AMZ Book Publish</strong></p>
                    <p>801 Travis St, Houston, TX 77002</p>
                    <p>Contact Number: 832-906-3700 | Email: info@amzbookpublish.com</p>
                </div>
            </div>
        </div>
        ";

        // Generate PDF
        $pdf = PDF::loadHTML($htmlContent);

        // Send Email
        return $this->subject('AMZ Book Publish Agreement')
                    ->view('email.agreement-email')
                    ->attachData($pdf->output(), 'agreement.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
