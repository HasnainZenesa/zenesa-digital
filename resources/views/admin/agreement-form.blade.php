@extends('layouts.front')
@section('content')
    <div class="container" style="margin-top: 100px; color: black;">
        <div class="card shadow-sm p-4" style="max-width: 800px; margin: auto;">
            <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.sendAgreement') }}">
                @csrf
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white text-center">
                        <h2>Social Media Management Agreement</h2>
                    </div>
                    <div class="card-body">
                        <!-- Date Field -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="date" class="form-label">Agreement Date</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                        </div>

                        <p><strong>Date:</strong> <span class="text-muted">{{ old('date') }}</span></p>
                        <p>This Social Media Management Agreement is made between Zenesa Digital, located at 3720 Southwest Fwy, Houston, TX 77098 and client. This Agreement outlines the terms and conditions under which the Agency shall provide social media marketing services to the Client.</p>
                        <ul class="list-unstyled">
                            <li><strong>Start Date:</strong> July 7, 2025</li>
                            <li><strong>End Date:</strong> January 31, 2026</li>
                            <li><strong>Contact:</strong>(469) 608-8053</li>
                            <li><strong>Email:</strong> info@zenesadigital.com</li>
                        </ul>

                        <!-- Other fields: Name, Email, Address, Contact, Payment -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="address" class="form-label">Package</label>
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact" class="form-label">Your Contact Number</label>
                                <input type="text" id="contact" name="contact" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="payment" class="form-label">Payment Amount</label>
                                <input type="text" id="payment" name="payment" class="form-control" required>
                            </div>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="package" class="form-label">Select Package</label>
                            <select name="package" id="package" class="form-control" required>
                                <option value="" disabled selected>Select a package</option>
                                <option value="Basic - $199" {{ old('package', $agreement->package ?? '') == 'Basic - $199' ? 'selected' : '' }}>Basic - $199</option>
                                <option value="Startup - $450" {{ old('package', $agreement->package ?? '') == 'Startup - $450' ? 'selected' : '' }}>Startup - $450</option>
                                <option value="Standard - $750" {{ old('package', $agreement->package ?? '') == 'Standard - $750' ? 'selected' : '' }}>Standard - $750</option>
                                <option value="Platinum - $1999" {{ old('package', $agreement->package ?? '') == 'Platinum - $1999' ? 'selected' : '' }}>Platinum - $1999</option>
                            </select>
                        </div> -->

                        <!-- Services Section -->
                        <h5 class="mt-4">1. Services</h5>
                        <ul>
                            <p>The Agency agrees to provide social media management services as outlined in the agreed-upon scope of work ("SOW"). Services are focused on organic marketing efforts and do not include paid advertisements or sponsored campaigns unless otherwise specified in the SOW.</p>
                            <label for="scope_of_services" class="form-label"></label>
                            <textarea name="scope_of_services" class="form-control"
                                required>{{ old('scope_of_services', '') }}</textarea>

                        </ul>

                        <h5 class="mt-4">2. Payment Terms</h5>
                        <p>The Client agrees to pay an initial fee of  <strong>_____</strong> for the services
                            outlined in Section 1.</p>
                        <ol>
                            <textarea name="payment_terms" class="form-control"
                                required>{{ old('payment_terms', '') }}</textarea>
                        </ol>
                        </ol>
                        <!-- Section 3 -->
                        <h5 class="mt-4">3. Deliverables</h5>
                        <p>The Agency will provide the following deliverables each month:</p>
                            <p>• 4 professionally edited and branded videos or reels</p>
                            <p>• 12 custom-designed social media posts, including captions and hashtags</p>

                        <!-- Section 4 -->
                        <h5 class="mt-4">4. Platforms Covered</h5>
                        <p>The social media management services will be provided for the following platforms:</p>
                            <p>• Facebook</p>
                            <p>• Instagram</p>
                            <p>• TikTok</p>
                            <p>• Youtube</p>

                        <!-- Section 5 -->
                        <h5 class="mt-4">5.Intellectual Property and Ownership rights </h5>
                        <p>• Upon full payment, the Client will have full rights to use the final deliverables. The Agency
                            retains the right to display the work in its portfolio or for marketing purposes.</p>
                            <p> • Any third-party elements (e.g., stock images, fonts) incorporated into the design may be
                            subject to their respective licensing terms, and the Client is responsible for ensuring proper
                            usage.</p>

                        <!-- Section 6 -->
                        <h5 class="mt-4">6. Ownership & Rights</h5>
                        <p>• Upon final delivery and full payment, all content created under this Agreement will become the property of the Client.</p>
                        <p>• Zenesa Digital retains the right to display the content for portfolio or promotional use unless otherwise agreed in writing.</p>

                        <!-- Section 7 -->
                        <h5 class="mt-4">7. Termination</h5>
                        <p>In the event of termination, the Client will be responsible for payment for all work completed up to the date of termination.</p>

                        <!-- Section 8 -->
                        <h5 class="mt-4">8. Confidentiality</h5>
                        <p>Both parties agree to maintain the confidentiality of any 
                            proprietary or confidential information shared during the course of this Agreement.</p>

                        <!-- Section 9 -->
                        <h5 class="mt-4">9. Governing Law</h5>
                        <p>This Agreement shall be governed by and construed by the laws of the State of Texas, 
                            USA, without regard to its conflict of law principles.</p>

                        <!-- Section 10 -->
                        <h5 class="mt-4">10. Entire Agreement</h5>
                        <p>This Agreement, including any SOWs and attachments, constitutes the entire agreement
                             between the parties and supersedes any prior written or oral agreements.</p>

                        <!-- Section 11 -->
                        <h5 class="mt-4">11. Dispute Resolution</h5>
                        <p>In the event of a dispute, both parties agree to attempt resolution
                             through mediation before pursuing legal action.</p>

                        <!-- Section 12 -->
                        <h5 class="mt-4">12. Entire Agreement</h5>
                        <p>This Agreement represents the entire understanding between the parties.</p>

                        <button type="submit" class="btn btn-success mt-3">Send Agreement</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection