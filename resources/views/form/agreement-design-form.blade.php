@extends('layouts.front')
@section('content')
<!--<div class="container" style="margin-top: 100px;">-->
<!--    <div class="card shadow-sm p-4" style="max-width: 800px; margin: auto;">-->

        <!-- Success/Error Messages -->
<!--        @if(session('success'))-->
<!--        <div class="alert alert-success">-->
<!--            {{ session('success') }}-->
<!--        </div>-->
<!--        @endif-->

<!--        @if(session('error'))-->
<!--        <div class="alert alert-danger">-->
<!--            {{ session('error') }}-->
<!--        </div>-->
<!--        @endif-->

<!--        <form action="{{ route('submit.agreement') }}" method="POST" id="agreementForm">-->
<!--            @csrf-->
<!--        <div class="card shadow-lg">-->
<!--            <div class="card-header bg-dark text-white text-center">-->
<!--                <h2>Book Publishing Services Agreement</h2>-->
<!--            </div>-->
<!--            <div class="card-body">-->
<!--                <p><strong>Date:</strong> <span class="text-muted">{{$agreementDate}}</span></p>-->
<!--                <p>This Agreement is made and entered into by and between:</p>-->
<!--                <ul class="list-unstyled">-->
<!--                    <li><strong>Publisher:</strong> Amz Book Publish</li>-->
<!--                    <li><strong>Address:</strong> 801 Travis St, Houston, TX 77002</li>-->
<!--                    <li><strong>Contact:</strong> 832-906-3700</li>-->
<!--                    <li><strong>Email:</strong> info@amzbookpublish.com</li>-->
<!--                </ul>-->
            <!-- Client Name -->
<!--            <div class="row mb-3">-->
<!--                        <div class="col-md-6">-->
<!--                            <label for="clientName" class="form-label">Your Name</label>-->
<!--                            <input type="text" id="clientName" name="clientName" class="form-control" required>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <label for="userEmail" class="form-label">Your Email</label>-->
<!--                            <input type="email" id="userEmail" name="userEmail" class="form-control" required>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="row mb-3">-->
<!--                        <div class="col-md-6">-->
<!--                            <label for="contactNumber" class="form-label">Contact Number</label>-->
<!--                            <input type="text" id="contactNumber" name="contactNumber" class="form-control" required>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <label for="agreementDate" class="form-label">Agreement Date</label>-->
<!--                            <input type="date" id="agreementDate" name="agreementDate" class="form-control" required>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="row mb-3">-->
<!--                        <div class="col-md-6">-->
<!--                            <label for="address" class="form-label">Address</label>-->
<!--                            <textarea id="address" name="address" class="form-control" rows="3" required></textarea>-->
<!--                          </div>-->
<!--                          <div class="col-md-6">-->
<!--                          <label for="paymentAmount" class="form-label">Payment Amount</label>-->
<!--                           <div class="input-group">-->
<!--                          <span class="input-group-text">$</span>-->
<!--                            <input readonly type="number" id="paymentAmount" name="paymentAmount" class="form-control" required >-->
<!--                           </div>-->
<!--                           </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>             -->
                 
 <!-- Section 1 -->
<!-- <h5 class="mt-4">1. Scope of Services</h5>-->
<!--                <ul>-->
<!--                    <li>Editing and proofreading</li>-->
<!--                    <li>Typesetting and layout adjustment</li>-->
<!--                    <li>Formatting for eBook, paperback, and hardcover</li>-->
<!--                    <li>Premium book cover design</li>-->
<!--                    <li>ISBN + barcode assignment</li>-->
<!--                    <li>Publication on Amazon Kindle, Barnes & Noble, and IngramSpark</li>-->
<!--                    <li>Global accessibility</li>-->
<!--                    <li>Unlimited revisions</li>-->
<!--                    <li>A dedicated project manager</li>-->
<!--                    <li>100% ownership rights to the Author</li>-->
<!--                </ul>-->

                <!-- Section 2 -->
<!--                <h5 class="mt-4">2. Payment Terms</h5>-->
<!--                <p>The Author agrees to pay the Publisher a total fee of <strong>_____</strong> for the services outlined in Section 1. Payment will be made in the following installments:</p>-->
<!--                <ol>-->
<!--                <li>50% upon signing this Agreement.</li>-->
<!--                <li>50% upon final approval of the book by the Author.</li>-->
<!--                </ol>-->

                <!-- Section 3 -->
<!--                <h5 class="mt-4">3. Deliverables</h5>-->
<!--                <p>The finalized Work will be delivered in the agreed formats (eBook, paperback, and hardcover) within <strong>30 days</strong> from the date of this Agreement, provided all necessary materials and approvals are received in a timely manner.</p>-->

                <!-- Section 4 -->
<!--                <h5 class="mt-4">4. Author’s Responsibilities</h5>-->
<!--                <p>The Author must provide all necessary materials, including the manuscript, images, and any additional assets for the book cover design.</p>-->

                <!-- Section 5 -->
<!--                <h5 class="mt-4">5. Ownership & Rights</h5>-->
<!--                <p>The Author retains <strong>100% ownership</strong> of the Work, including all copyrights. The Publisher will not hold any rights to the content.</p>-->

                <!-- Section 6 -->
<!--                <h5 class="mt-4">6. ISBN & Distribution</h5>-->
<!--                <p>The Publisher will provide an ISBN and barcode and facilitate distribution on Amazon Kindle and Barnes & Noble. The Author will set pricing and royalties.</p>-->

                <!-- Section 7 -->
<!--                <h5 class="mt-4">7. Revisions & Approvals</h5>-->
<!--                <p>The Publisher will provide unlimited revisions during the production process. The Author must approve each stage before moving forward.</p>-->

                <!-- Section 8 -->
<!--                <h5 class="mt-4">8. Confidentiality</h5>-->
<!--                <p>Both parties agree to maintain confidentiality for all sensitive information exchanged during the course of this Agreement.</p>-->

                <!-- Section 9 -->
<!--                <h5 class="mt-4">9. Termination</h5>-->
<!--                <p>The Agreement may be terminated with written notice if obligations are not fulfilled. A refund will be issued for services not yet rendered.</p>-->

                <!-- Section 10 -->
<!--                <h5 class="mt-4">10. Dispute Resolution</h5>-->
<!--                <p>Disputes will be resolved through negotiation or binding arbitration under Texas law.</p>-->

                <!-- Section 11 -->
<!--                <h5 class="mt-4">11. Governing Law</h5>-->
<!--                <p>This Agreement is governed by the laws of the State of Texas.</p>-->

                <!-- Section 12 -->
<!--                <h5 class="mt-4">12. Entire Agreement</h5>-->
<!--                <p>This Agreement represents the entire understanding between the parties.</p>-->
            
            <!-- Submit Button -->
<!--            <button type="submit" class="btn btn-success mt-3">Submit Agreement</button>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--        </div>-->
<!--    </div>-->

@endsection