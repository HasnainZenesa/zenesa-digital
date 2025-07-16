<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>

<div class="container text-center">
    <h2>{{ $invoice->name }} - Invoice</h2>
    <div class="card mx-auto" style="max-width: 400px; padding: 20px; box-shadow: 0px 0px 10px #ccc;">
        <img src="{{ asset('images/invoice-icon.png') }}" alt="Invoice Icon" width="80">
        <h3 class="mt-3">Invoice Paid</h3>
        <h1>${{ number_format($invoice->amount, 2) }}</h1>
        <p>Invoice Number: {{ $invoice->invoice_number }}</p>
        <p>Payment Date: {{ \Carbon\Carbon::parse($invoice->payment_date)->format('M d, Y') }}</p> <!-- Ensure Carbon -->
        <p>Payment Method: {{ $invoice->payment_method }}</p>
        <a href="{{ $invoice->receipt_url }}" class="btn btn-primary" target="_blank">Download Receipt</a>
    </div>
</div>

</body>
</html>
