<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h4 class="mb-4 text-center">Payment Invoice</h4>
                <form method="POST" action="{{ route('checkout.start') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" name="amount" value="{{ $amount }}">
                    <input type="hidden" name="description" value="{{ $description }}">
                    <div class="mb-3">
                        <label class="form-label">You're being charged:</label>
                        <p class="form-control-plaintext fw-bold"> <label>Email: {{ $email }}</label> <br> <label>Amount: ${{ $amount }}</label> <br> <label>Description: {{ $description }} </label> </p>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Proceed to Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>