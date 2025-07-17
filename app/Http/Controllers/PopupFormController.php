<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PopupFormController extends Controller
{
    public function send(Request $request)
    {
        // ✅ Step 1: Validate input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // ✅ Step 2: Get input
        $data = $request->only(['name', 'email', 'phone', 'message']);

        // ✅ Step 3: Recipient
        $to = env('POPUP_FORM_EMAIL', 'admin@example.com');

        // ✅ Step 4: Compose mail body
        $body = "New Popup Form Submission:\n\n";
        $body .= "Name: {$data['name']}\n";
        $body .= "Email: {$data['email']}\n";
        $body .= "Phone: {$data['phone']}\n";
        $body .= "Message: {$data['message']}\n";

        // ✅ Step 5: Send mail
        try {
            Mail::raw($body, function($message) use ($to) {
                $message->to($to)
                        ->subject('Popup Form Submission - Zenesa Digital');
            });

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Send error response to frontend
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

}
