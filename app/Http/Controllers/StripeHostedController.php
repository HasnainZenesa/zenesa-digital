<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeHostedController extends Controller
{
    public function showForm(Request $request)
    {
        return view('hosted-checkout', [
            'email' => $request->query('email'),
            'amount' => $request->query('amount'),
            'description' => $request->query('description'),
        ]);
    }

   public function startCheckout(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'amount' => 'required|numeric|min:1',
        'description' => 'nullable|string'
    ]);

    Stripe::setApiKey(config('services.stripe.secret'));

 $session = Session::create([
    'payment_method_types' => ['card', 'klarna','afterpay_clearpay', 'us_bank_account'],
    'mode' => 'payment',
    'line_items' => [[
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => 'Zenesa Digital – ' . ($request->description ?? 'Custom Package'),
            ],
            'unit_amount' => intval($request->amount * 100),
        ],
        'quantity' => 1,
    ]],
    'customer_email' => $request->email,
    'success_url' => url('/thank-you'),
    'cancel_url' => url('/cancelled'),
]);


    return redirect($session->url);
}

    
    

    public function generateLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'amount' => 'required|numeric|min:1',
            'description' => 'required|string'
        ]);

        $url = route('checkout.form', [
            'email' => $request->email,
            'amount' => $request->amount,
            'description' => $request->description,
        ]);

        return view('admin.generate-payment-link', ['paymentLink' => $url]);
    }
}
