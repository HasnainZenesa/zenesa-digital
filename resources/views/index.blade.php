@extends('layouts.front')
@section('content')
<section class="banner-sec w-100 float-left bg-light-black">
        <div class="wrapper2">
            <div class="banner-left-sec">
                <h1 data-aos="fade-up" data-aos-duration="600">Welcome to <span>Zenesa </span>Digital</h1>
                <p data-aos="fade-up" data-aos-duration="600">Advance your business and its revenue with our
                    research-based digital marketing services in the USA.</p>
                <div class="generic-btn" data-aos="fade-up" data-aos-duration="600">
                    <a href="#" onclick="Tawk_API.maximize(); return false;" style="margin-right: 5px;">Live Chat</a>
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



    <!-- about section -->
    <section class="about-main-sec w-100 float-left padding-top padding-bottom bg-light-black">
        <div class="wrapper2">
            <div class="row">
                <div class="about-main-sec-video col-lg-6 d-flex gap-3">
                    <figure class="mb-0" data-aos="fade-up" data-aos-duration="600">
                        <video src="assets/images/about-us-video/7.mp4" autoplay loop muted width="100%"></video>
                    </figure>
                    <figure class="ml-4" data-aos="fade-up" data-aos-duration="600">
                        <video src="assets/images/about-us-video/9.mp4" autoplay loop muted width="100%"></video>
                    </figure>
                </div>

                <div class="col-lg-6 d-flex align-items-center justify-content-left justify-content-center">
                    <div class="about-details-box">
                        <div class="generic-title">
                            <span data-aos="fade-up" data-aos-duration="600">Accessible, Affordable, Creative</span>
                        </div>
                        <p data-aos="fade-up" data-aos-duration="600"><span style="color: #00fcdb;">ZENESA DIGITAL
                                ,</span> we are dedicated to delivering exceptional design services while prioritizing
                            outstanding customer experience. Our team of passionate professionals has successfully
                            completed thousands of projects, showcasing our commitment to quality and innovation. We
                            believe that great design should be accessible and affordable for everyone, and we strive to
                            exceed our clients' expectations at every step of the journey. Experience the difference
                            with us—where creativity meets exceptional service.</p>
                        <div class="generic-btn" data-aos="fade-up" data-aos-duration="600">
                            <a href="#" onclick="Tawk_API.maximize(); return false;">Live Chat</a>
                             <a href="{{route('contact.index')}}">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section-->

    <!-- services section -->
    <section class="service-slider-sec w-100 float-left padding-top  bg-light-black">
        <div class="generic-title text-center">
            <span data-aos="fade-up" data-aos-duration="600">WHAT WE DO</span>
            <h2 data-aos="fade-up" data-aos-duration="600"> Unleash the Potential of Al Development
                Tools Crafted with Brilliance, Style, Quality,
                and Creativity</h2>
        </div>
        <div class="service-slider-box" data-aos="fade-up" data-aos-duration="600">
            <div id="owlsliderone" class="owl-carousel owl-theme">
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/1.mp4" alt="slider-video1" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/2.mp4" alt="slider-video2" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/3.mp4" alt="slider-video3" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/4.mp4" alt="slider-video4" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/5.mp4" alt="slider-video5" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/6.mp4" alt="slider-video6" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/7.mp4" alt="slider-video7" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/8.mp4" alt="slider-video8" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>
                <div class="item">
                    <figure class="mb-0">
                        <video src="assets/images/carousel-video/9.mp4" alt="slider-video9" autoplay loop muted
                            playsinline></video>
                    </figure>
                </div>

            </div>
        </div>
    </section>
    <!-- services section -->
    <!-- collection section -->
    <section class="collection-section w-100 float-left padding-bottom bg-light-black">
        <div class="wrapper2">
            <div class="generic-title text-center">
                <span data-aos="fade-up" data-aos-duration="600">A Glimpse of Work!</span>
                <h2 data-aos="fade-up" data-aos-duration="600">Our Latest Creative Work</h2>
            </div>
            <div class="collection-inner-sec">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                        <div class="collection-box bg-dark-black">
                            <figure>
                                <img src="assets/images/collection-img1.png" alt="collection-img1">
                            </figure>
                            <h4>Web Design</h4>
                            <p></p>
                            <a href="{{route('website.index')}}"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                        <div class="collection-box bg-dark-black">
                            <figure>
                                <img src="assets/images/collection-img2.png" alt="collection-img2">
                            </figure>
                            <h4>Logo</h4>
                            <p></p>
                            <a href="{{route('logo.index')}}"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                        <div class="collection-box bg-dark-black">
                            <figure>
                                <img src="assets/images/collection-img3.png" alt="collection-img3">
                            </figure>
                            <h4>Digital Marketing</h4>
                            <p></p>
                            <a href="{{route('digitalmarketing.index')}}"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                        <div class="collection-box bg-dark-black">
                            <figure>
                                <img src="assets/images/collection-img4.png" alt="collection-img4">
                            </figure>
                            <h4>Pricing</h4>
                            <p></p>
                            <a href="{{route('price.index')}}"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>
    <!-- collection section -->

    <!-- gallery section -->
    <section class="gallery-section w-100 float-left padding-top padding-bottom bg-light-black">
        <div class="generic-title text-center">
            <span data-aos="fade-up" data-aos-duration="600">A Glimpse of Work!
            </span>
            <h2 data-aos="fade-up" data-aos-duration="600">Our Latest Creative Work</h2>
        </div>
        <div class="tabset mb-0" data-aos="fade-up" data-aos-duration="600">
            <!-- Tab 1 -->
            <input type="radio" name="tabset" id="tab1" aria-controls="art" checked>
            <label for="tab1">Website</label>
            <!-- Tab 2 -->
            <input type="radio" name="tabset" id="tab2" aria-controls="illustration">
            <label for="tab2">Logo</label>
            <!-- Tab 3 -->
            <input type="radio" name="tabset" id="tab3" aria-controls="design">
            <label for="tab3">Advertisement</label>
            <!-- Tab 4 -->
            <input type="radio" name="tabset" id="tab4" aria-controls="creative">
            <label for="tab4">Printing</label>

            <input type="radio" name="tabset" id="tab5" aria-controls="business">
            <label for="tab5">Business</label>

            <input type="radio" name="tabset" id="tab6" aria-controls="ecommerce">
            <label for="tab6">Ecommerce</label>

            

            <!-- tabs website start -->
            <div class="tab-panels" data-aos="fade-up" data-aos-duration="600">
                <div id="art" class="tab-panel gallery-images-box pb-0">
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/1/1.png" alt="gallery-img1">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/2/Untitled-1.png"
                                    alt="gallery-img2">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-4 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/3/3.png" alt="gallery-img3">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/4/4.png" alt="gallery-img4">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/5/5.png" alt="gallery-img5">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/6/6.png" alt="gallery-img6">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/7/7.png" alt="gallery-img7">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/8/8.png" alt="gallery-img8">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/9/9.png" alt="gallery-img9">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/4/4.png" alt="gallery-img9">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/11/11.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-website-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/website/bus/12/12.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tabs website End -->


                <!-- tabs Logo start -->

                <div id="illustration" class="tab-panel gallery-second-tab">
                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/1.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/2.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/3.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/4.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/5.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/6.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/7.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/8.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-logo-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/carousel-video/9.mp4" autoplay loop muted playsinline></video>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- tabs Logo end -->


                <!-- advertisement tab start -->

                <div id="design" class="tab-panel gallery-third-tab">
                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/1.jpg" alt="gallery-img6">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/2.jpg" alt="gallery-img7">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/3.jpg" alt="gallery-img8">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/4.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/5.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/6.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/7.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/8.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-advertisement-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/advertisement/9.jpg" alt="gallery-img9">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- advertisement tab end -->

                <!-- printing tab start -->

                <div id="creative" class="tab-panel gallery-fourth-tab">
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/printing/1.html" alt="gallery-img9">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/2.html" alt="gallery-img4">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/3.html" alt="gallery-img2">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/4.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/5.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/6.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/7.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/8.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/9.jpg" alt="gallery-img6">
                            </div>
                        </div>
                    </div>
                </div>



                <div id="business" class="tab-panel gallery-fifth-tab">
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/printing/1.html" alt="gallery-img9">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/2.html" alt="gallery-img4">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/3.html" alt="gallery-img2">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/4.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/5.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/6.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/7.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/8.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/9.jpg" alt="gallery-img6">
                            </div>
                        </div>
                    </div>
                </div>






                <div id="ecommerce" class="tab-panel gallery-sixth-tab">
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/ecommerce/1.html" alt="gallery-img9">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/2.html" alt="gallery-img4">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/3.html" alt="gallery-img2">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/4.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/5.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/6.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/7.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/8.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/9.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/10.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/11.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-printing-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/ecommerce/12.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>
                </div>





                <div id="parallax" class="tab-panel gallery-seventh-tab">
                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/1.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/2.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/3.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/4.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/5.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/6.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/7.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/8.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-parallax-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <video src="assets/images/parallax/9.mp4" controls autoplay muted loop></video>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="web-portal" class="tab-panel gallery-eighth-tab">
                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images">
                                <img src="assets/images/webportal/1/1.png" alt="gallery-img9">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/webportal/2/2.png" alt="gallery-img4">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/webportal/3/3.png" alt="gallery-img2">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/4.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>

                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/5.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/6.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/7.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/8.html" alt="gallery-img6">
                            </div>
                        </div>
                    </div>


                    <div class="gallery-container w-1 h-2 inner-web-portal-gallery">
                        <div class="gallery-item">
                            <div class="images"><img src="assets/images/printing/9.jpg" alt="gallery-img6">
                            </div>
                        </div>
                    </div>
                </div>


                <!-- printing tab end -->
            </div>

        </div>
    </section>







    <section class="work-category w-100 float-left padding-bottom bg-light-black">
        <div class="wrapper2">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <div class="inner-work-category-content">
                        <h2>Weblogy Drives Industry Growth Nationwide</h2>
                        <p>Zenesa Digital's customized solutions have helped all types of industries in the USA achieve
                            significant growth and operational excellence.</p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="work-category-main-box">
                        <div class="work-category-inner-box" style="background-color: #70e4e8;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-1.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Social Networking</p>
                            </div>
                        </div>


                        <div class="work-category-inner-box" style="background-color: #f5eb92;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-2.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Digital Marketing</p>
                            </div>
                        </div>


                        <div class="work-category-inner-box" style="background-color: #a3ffe2">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-3.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Ecommerce Development</p>
                            </div>
                        </div>



                        <div class="work-category-inner-box" style="background-color: #ffbc7a">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-4.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Video Service</p>
                            </div>
                        </div>


                        <div class="work-category-inner-box" style="background-color: #e3ff8e; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-5.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Banking Service</p>
                            </div>
                        </div>


                        <div class="work-category-inner-box" style="background-color: #ffa0c6; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-6.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Enterprise Service</p>
                            </div>
                        </div>


                        <div class="work-category-inner-box" style="background-color: #f3a6ff; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-7.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Education Service</p>
                            </div>
                        </div>

                        <div class="work-category-inner-box" style="background-color: #97ffaf; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-8.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Tour and Travels</p>
                            </div>
                        </div>



                        <div class="work-category-inner-box" style="background-color: #6cfffa; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-9.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Health Service</p>
                            </div>
                        </div>


                        <div class="work-category-inner-box" style="background-color: #77baff; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-10.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Event & Ticket</p>
                            </div>
                        </div>


                        <div class="work-category-inner-box" style="background-color: #ffefd4; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-11.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Restaurant Service</p>
                            </div>
                        </div>

                        <div class="work-category-inner-box" style="background-color: #7affdb; margin-top: 20px;">
                            <div class="work-category-inner-box-image">
                                <img src="assets/images/icons/icon-12.png" alt="">
                            </div>
                            <div class="work-category-inner-box-content">
                                <p>Business Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="testimonial w-100 float-left padding-bottom bg-light-black">
        <div class="testimonial-container">
            <div class="testimonial-card">
                <img src="assets/images/youtube-image/0.jpg" alt="Bridgette Hoggatt-Riley">
                <div class="testimonial-content">
                    <h3>Bridgette Hoggatt-Riley</h3>
                    <button class="watch-video" data-video="https://www.youtube.com/embed/YbMyhWTKAhw">Watch
                        Video</button>
                </div>
            </div>

            <div class="testimonial-card">
                <img src="assets/images/youtube-image/0 (1).jpg" alt="Randi Carter">
                <div class="testimonial-content">
                    <h3>Randi Carter</h3>
                    <button class="watch-video" data-video="https://www.youtube.com/embed/dQA6il0WFfI">Watch
                        Video</button>
                </div>
            </div>

            <div class="testimonial-card">
                <img src="assets/images/youtube-image/0 (2).jpg" alt="Holly Blanchard Hall">
                <div class="testimonial-content">
                    <h3>Holly Blanchard Hall</h3>
                    <button class="watch-video" data-video="https://www.youtube.com/embed/JbtXkTuTlY0">Watch
                        Video</button>
                </div>
            </div>

            <div class="testimonial-card">
                <img src="assets/images/youtube-image/0 (3).jpg" alt="Heidi Decker">
                <div class="testimonial-content">
                    <h3>Heidi Decker</h3>
                    <button class="watch-video" data-video="https://www.youtube.com/embed/O9VP3gifrMQ">Watch
                        Video</button>
                </div>
            </div>

            <div class="testimonial-card">
                <img src="assets/images/youtube-image/0 (4).jpg" alt="April Morrison">
                <div class="testimonial-content">
                    <h3>April Morrison</h3>
                    <button class="watch-video" data-video="https://www.youtube.com/embed/P5_IpGyJZmY">Watch
                        Video</button>
                </div>
            </div>

            <div class="testimonial-card">
                <img src="assets/images/youtube-image/0 (5).jpg" alt="April Simms">
                <div class="testimonial-content">
                    <h3>April Simms</h3>
                    <button class="watch-video" data-video="https://www.youtube.com/embed/zS8EqqZBGDE">Watch
                        Video</button>
                </div>
            </div>
        </div>

        <!-- Modal for Video -->
        <div id="videoModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe id="youtubeVideo" width="800" height="450" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>





    <section class="trust-pilot-sec w-100 float-left   bg-light-black">
        <div class="wrapper4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="trust-pilot-main">
                            <h3>Your Trust, Our Commitment to Excellence</h3>
                            <h4>Please Click the Review Button.</h4>
                            <ul>
                                <li><img src="assets/images/trustpiolt.png" alt=""><a
                                        href="https://www.trustpilot.com/review/zenesadigital.com">Trust Pilot</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>








    <section class="details-sec w-100 float-left   bg-light-black">
        <div class="wrapper4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="details-sec-content">
                            <h3>Ready to Wow Your Audience?</h3>
                            <h4>Start with a 50% Off Website Design & Development Deal</h4>
                            <div class="generic-btn" data-aos="fade-up" data-aos-duration="600">
                                <a href="#" onclick="Tawk_API.maximize(); return false;">Live Chat</a>
                                <a href="{{route('contact.index')}}">Get Started</a>
                            </div>
                            <ul>
                                <li>Or call us now<a href=""><i class="fas fa-phone"></i> (469) 608-8053 
                                        </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>









    <!-- gallery section-->
    <!-- plans section-->
    <!-- <section class="plans-section w-100 float-left padding-top padding-bottom bg-light-black">
        <div class="wrapper2">
            <div class="generic-title text-center">
                <span data-aos="fade-up" data-aos-duration="600">AFFORDABLE PLANS</span>
                <h2 data-aos="fade-up" data-aos-duration="600">Pricing Plans</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="600">
                    <div class="plan-box text-center bg-dark-black">
                        <h3>Business Plan</h3>
                        <p class="plan-txt">Perfect for private individuals</p>
                        <p>Starting at:</p>
                        <div class="price position-relative">
                            <span>$</span>8<span>/mo</span>
                        </div>
                        <div class="w-100 float-left">
                            <ul class="text-left list-unstyled">
                                <li><i class="fas fa-check"></i> 100 Projects</li>
                                <li><i class="fas fa-check"></i> Download prototypes</li>
                                <li><i class="fas fa-check"></i> Graphic Images</li>
                            </ul>
                        </div>
                        <div class="generic-btn">
                            <a href="pricing.html">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="600">
                    <div class="plan-box premium-plan text-center bg-dark-black">
                        <h3>Premium Plan</h3>
                        <p class="plan-txt">Perfect for private companies</p>
                        <p>Starting at:</p>
                        <div class="price position-relative">
                            <span>$</span>19<span>/mo</span>
                        </div>
                        <div class="w-100 float-left">
                            <ul class="text-left list-unstyled">
                                <li><i class="fas fa-check"></i> Unlimited Projects</li>
                                <li><i class="fas fa-check"></i> Download prototypes</li>
                                <li><i class="fas fa-check"></i> Graphic Images</li>
                            </ul>
                        </div>
                        <div class="generic-btn">
                            <a href="pricing.html">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- video section-->
    <!-- <div class="video-sec w-100 float-left" data-aos="fade-up" data-aos-duration="600">
        <div class="box-video">
            <div class="bg-video">
                <div class="bt-play"></div>
            </div>
            <div class="video-container">
                <iframe width="590" height="332" src="https://www.youtube.com/embed/qIjZqxqDTNM?rel=0&amp;showinfo=0"></iframe>
            </div>
        </div>
    </div> -->
    <!-- video section-->
    <!-- slider section-->
    <section class="reviews-section w-100 float-left padding-top padding-bottom bg-light-black" data-aos="fade-up"
        data-aos-duration="600">
        <div class="wrapper2">
            <div id="owlslider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>Michael was great by creating my ideal logo. Following up with my requests and making
                            adjustments as I requested. I definitely Recommend to anyone in need of designs for their
                            company.!</p>

                    </div>
                </div>
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>Michael is stellar with his creative mind in intellectual genius. I have been working with
                            Michael for the last two years and my artwork for all three of my businesses are
                            outstanding. I couldn’t be more happier. He takes his time. He asked lots of questions, and
                            he really works with his client. I’m so glad that we connected. I’ll be doing a lot more
                            business with him in the future and referring him.</p>

                    </div>
                </div>
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>This company has been a blessing! So patient. I’m doing a logo for club and pretty much knew
                            basic look. However the official date and center changed few times! Each time I was told “no
                            problem just tell us what to use, we can rework and send file” Thank you for wonderful
                            artwork!!!</p>

                    </div>
                </div>
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>Had a great interaction, developing a logo and business card for our family business.
                            Feedback was quickly incorporated and the whole process (with three rounds of changes) took
                            only a few days. Would use again!</p>

                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection