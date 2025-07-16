@extends('layouts.front')
@section('content')
   <!-- banner section -->
   <section class="banner-sec w-100 float-left bg-light-black">
        <div class="wrapper2">
            <div class="banner-left-sec">
                <h1 data-aos="fade-up" data-aos-duration="600">Welcome to <span>Zenesa </span>Digital</h1>
                <p data-aos="fade-up" data-aos-duration="600">Advance your business and its revenue with our research-based digital marketing services in the USA.</p>
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
                            <div class="images"><img src="assets/images/website/bus/2/Untitled-1.png" alt="gallery-img2">
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
                                <img src="assets/images/printing/1.html" alt="gallery-img9"></div>
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
                                <img src="assets/images/printing/1.html" alt="gallery-img9"></div>
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
                                <img src="assets/images/ecommerce/1.html" alt="gallery-img9"></div>
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
                                <img src="assets/images/webportal/1/1.png" alt="gallery-img9"></div>
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

@endsection