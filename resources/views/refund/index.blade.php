@extends('layouts.front')
@section('content')
 <!-- banner section -->
 <section class="banner-sec about-banner w-100 float-left bg-light-black">
        <div class="wrapper2"> 
           <div class="refundpolicy-banner">
            <h1>Refund Policy</h1>
            <div class="generic-btn" data-aos="fade-up" data-aos-duration="600">
                <a href="#" onclick="Tawk_API.maximize(); return false;">Live Chat</a>
                <a href="{{route('contact.index')}}">Get Started</a>
            </div>
           </div>
        </div>
        <div class="social-box">
            <ul class="mb-0 list-unstyled">
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="fas fa-image"></i></a></li>
                <li><a href="#"><i class="fas fa-comment-alt"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- banner section -->



    <section class="refundpolicy-sec-1 w-100 float-left bg-light-black">
        <div class="container">
            <h2>Refund Policy</h2>
            <p>At Zenesa Digital, we are committed to delivering high-quality services and ensuring client satisfaction. However, we understand that circumstances may arise where a refund is requested. Below is our refund policy for clarity and transparency:</p>
            <h2>Initial Deposit</h2>
            <p>All projects require an initial deposit to commence work. This deposit is non-refundable once work has begun, as it covers the initial research, consultation, and planning phases.</p>
            <h2>Cancellation Policy</h2>
            <p>Before Work Begins: If a project is canceled before any work has started, a full refund of the deposit will be issued. After Work Has Begun: Refunds for cancellations after work has commenced will be determined based on the amount of work completed. Any refundable amount will be calculated at Zenesa Digital's discretion.</p>
            <h2>Revision and Satisfaction Guarantee</h2>
            <p>We are committed to client satisfaction and offer revisions as outlined in the project agreement. Refunds will not be granted for dissatisfaction with designs if the agreed-upon revision opportunities have been utilized.</p>
            <h2>No Refunds on Final Deliverables</h2>
            <p>Once the final deliverables have been approved and handed over, no refunds will be issued.</p>
            <h2>Timely Requests</h2>
            <p>Refund requests must be submitted in writing within 7 days of the project termination or cancellation.</p>
            <h2>Exceptional Circumstances</h2>
            <p>In rare cases where a refund is issued beyond the above conditions, it will be at the sole discretion of Zenesa Digital.</p>
        </div>
    </section>
@endsection