<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AgreementController extends Controller
{
    // **Admin: Show Agreement Form**
    public function showAdminForm()
    {
        return view('admin.agreement-form');
    }

    // **Admin: Send Agreement to Client**
    public function sendAgreement(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required|string',
            'contact' => 'required|string',
            'payment' => 'required|string',
            
            'scope_of_services' => 'required|string',
            'payment_terms' => 'required|string',
            'date' => 'required|date',
        ]);

        // Generate a unique token
        $token = Str::random(32);

        // Store client data in the database
        $agreement = Agreement::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'payment' => $request->payment,
            'date' => $request->date,
            'scope_of_services' => $request->scope_of_services,
            'payment_terms' => $request->payment_terms,
           
            'token' => $token,
        ]);

        // Generate client agreement link
        $link = route('client.agreement', ['token' => $token]);
        $name = $request->name;

        // Send email to client with agreement link
        Mail::to($request->email)->send(new \App\Mail\AgreementLinkMail($link, $name ));

        return back()->with('success', 'Agreement link sent to the client.');
    }

    // **Client: Show Agreement Form (Read-Only)**
    public function showClientForm($token)
    {
        $agreement = Agreement::where('token', $token)->first();

        if (!$agreement) {
            abort(404, 'Invalid or expired link.');
        }

        return view('client.agreement-form', ['data' => $agreement]);
    }

    // **Admin: Update "Scope of Services" & "Payment Terms"**
    public function updateAgreement(Request $request, $id)
    {
        if (!Auth::user()->is_admin) {
            return back()->with('error', 'Unauthorized action.');
        }

        $request->validate([
            'scope_of_services' => 'required|string',
            'payment_terms' => 'required|string',
        ]);

        $agreement = Agreement::findOrFail($id);
        $agreement->update([
            'scope_of_services' => $request->scope_of_services,
            'payment_terms' => $request->payment_terms,
        ]);

        return back()->with('success', 'Agreement updated successfully.');
    }

    // **Client: Submit Agreement with Signature**
    public function submitAgreement(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required|string',
            'contact' => 'required|string',
            'payment' => 'required|string',
            'date' => 'required|date',
            'signature' => 'required',
            'agreement' => 'accepted',
        ]);

        // Save signature as an image
        $signatureData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->signature));
        $signaturePath = 'signatures/' . uniqid() . '.png';
        Storage::disk('public')->put($signaturePath, $signatureData);

        // Find agreement using email
        $agreement = Agreement::where('email', $request->email)->first();
        if (!$agreement) {
            return back()->with('error', 'No agreement found for this email.');
        }

        // Update agreement with signature
        $agreement->update(['signature_path' => $signaturePath]);

        // Generate PDF
        $pdf = Pdf::loadView('pdf.agreement', [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'payment' => $request->payment,
            'scope_of_services' => $agreement->scope_of_services,
            'payment_terms' => $agreement->payment_terms,
            
            'date' => $request->date,
            'signaturePath' => storage_path('app/public/' . $signaturePath),
        ]);

        // Save PDF
        $pdfPath = 'agreements/' . uniqid() . '.pdf';
        Storage::disk('public')->put($pdfPath, $pdf->output());

        // Send PDF to client & admin
        Mail::to($request->email)->send(new \App\Mail\AgreementPDFMail($pdfPath));
        Mail::to('info@zenesadigital.net')->send(new \App\Mail\AgreementPDFMail($pdfPath));

        return back()->with('success', 'Agreement submitted successfully, and the PDF has been sent to your email.');
    }
}
