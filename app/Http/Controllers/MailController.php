<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Mail\AgreementEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    public function showAgreementForm()
    {
        $currentDate = now()->toDateString(); // Current date in YYYY-MM-DD format
    return view('form.agreement-design-form', ['agreementDate' => $currentDate]);
    }

    public function submitAgreement(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'clientName' => 'required|string|max:255',
            'userEmail' => 'required|email',
            'contactNumber' => 'required|string|max:15',
            'address' => 'required|string',
            'agreementDate' => 'required|date',
            'agree' => 'accepted',
            'signatureData' => 'required|string',
            'paymentAmount' => 'required|numeric', // Validate paymentAmount
        ]);

        // Extract validated fields
        $clientName = $validated['clientName'];
        $userEmail = $validated['userEmail'];
        $contactNumber = $validated['contactNumber'];
        $address = $validated['address'];
        $agreementDate = $validated['agreementDate'];
        $agreementText = $request->input('agreementText'); // Optional field
        $signatureData = $validated['signatureData'];
        $paymentAmount = $validated['paymentAmount'];

        // Send email with PDF attachment
        Mail::to($userEmail)
            ->cc('sikandar2211d@gmail.com')
            ->send(new AgreementEmail(
                $clientName,
                $userEmail,
                $contactNumber,
                $address,
                $agreementDate,
                $agreementText,
                $signatureData,
                $paymentAmount
            ));

        // Redirect with success message
        return redirect()->back()->with('success', 'Agreement submitted successfully.');
    }

}
