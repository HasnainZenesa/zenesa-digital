<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generate Payment Link</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow p-4">
                    <h3 class="text-center fw-bold mb-3">Generate Payment Link</h3>
                    <form action="{{ route('admin.generate.link') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Client Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter client email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter client name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount ($)</label>
                            <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description </label>
                            <input type="text" name="description" class="form-control" placeholder="Enter Description" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Generate Link</button>
                    </form>
                    
                    @if(isset($paymentLink))
                        <div class="alert alert-success mt-3 text-center">
                            <p class="mb-0">Payment Link: <a href="{{ $paymentLink }}" class="fw-bold">{{ $paymentLink }}</a></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>