<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'fname' => 'required|string|max:255', // Changed 'name' to 'fname'
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'subject' => 'required|string|max:500', // Changed 'message' to 'subject'
    ]);

    // Send email
    Mail::to('info@zenesadigital.net')->send(new ContactFormMail($validated));

    // Return response
    return redirect()->back()->with('success', 'Your message has been sent successfully!');
}

}
