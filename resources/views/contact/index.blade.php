@extends('layouts.front')
@section('content')
<section class="contact-section w-100 float-left padding-top padding-bottom bg-light-black" id="form-contact">
        <div class="wrapper2">
            <div class="generic-title text-center">
                <span data-aos="fade-up" data-aos-duration="600">CONTACT US</span>
                <h2 data-aos="fade-up" data-aos-duration="600">Feel free to use the contact form <br>
                    to the right to reach out to us, or write us <br>
                    the old fashion way.</h2>
            </div>
            <div class="contct-form-section">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 order-md-0 order-2 ">
                        <div class="contact-details">
                            <ul class="mb-0 list-unstyled">
                                <li class="position-relative" data-aos="fade-up" data-aos-duration="600"><i class="fas fa-map-marker-alt"></i> 3720 Southwest Fwy Houston
<br>TX 77098</li>
                                <li class="position-relative" data-aos="fade-up" data-aos-duration="600"><i class="fas fa-phone-volume"></i> <a href="tel:+(469) 608-8370/(469) 608-8053">(469) 608-8053</a></li>
                                <li class="position-relative mb-0" data-aos="fade-up" data-aos-duration="600"><i class="fas fa-envelope"></i> <a href="mailto:info@zenesadigital.com">info@zenesadigital.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="contact-form-box">
                            <form action="{{ route('contact.submit') }}" class="bg-dark-black" method="POST" id="contactpage" data-aos="fade-up" data-aos-duration="600">
                                @csrf
                                <h3>How Can We Help?</h3>
                                <ul class="list-unstyled mb-0">
                                   <li class="position-relative">
                                       <i class="fas fa-user-alt"></i>
                                       <input class="w-100" placeholder="Name" type="text" name="fname" id="fname"></li>
                                   <li class="position-relative"><i class="fas fa-phone-volume"></i><input class="w-100" type="text" placeholder="Phone Number" name="phone" id="phone"></li>
                                   <li class="position-relative">
                                       <i class="fas fa-envelope"></i><input class="w-100" type="text" placeholder="Email Address" name="email" id="email"></li>
                                   <li class="w-100 position-relative"><i class="fas fa-pencil-alt"></i><textarea class="w-100" placeholder="Message" name="subject" id="subject"></textarea></li>
                                   <li class="mb-0 w-100 d-inline-block generic-btn">
                                       <button id="submit">Get Started</button>
                                   </li>
                                </ul>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection