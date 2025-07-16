@extends('layouts.front')
@section('content')

    <!-- banner section -->
    <section class="logo-banner-sec padding-bottom w-100 float-left bg-light-black">
        <div class="wrapper1">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-words">
                        <h2>Hire<span>Professional <br> Mobile App Designers</span></h2>
                        <h3>To Increase Your App Downloads<span></span></h3>
                    </div>
                    <div class="para">
                        <p>For the best feature-packed, high-performing native mobile applications <br> for iOS & Android devices, turn to our team of qualified mobile app developers.</p>
                    </div>
                    <div class=""> <button>START YOUR PROJECT</button></div>
                </div>
                <div class="col-md-6">
                    <div class="banner-picashow">
                        <img src="assets/images/icons/4065240-removebg-preview.png" style="width: 500px; height: 350px;" alt="">
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


    <section class="mobile-sec-1 w-100 float-left padding-top padding-bottom bg-dark-black">
        <div class="container">
            <div class="row">
                <!-- Left: Tabs with Content -->
                <div class="col-md-6 tabs-container">
                    <div class="main-tabbing">
                        <div class="inner-tabbing">
                            <button class="tab-button active" data-tab="ecommerce">
                                <h3>eCommerce Apps</h3>
                                <p>The best thing you could do for your business is to make your eCommerce store accessible to your customers' smartphones. For our clients, we create e-commerce store apps based on their specifications.</p>
                            </button>
                        </div>
                        <div class="inner-tabbing">
                            <button class="tab-button" data-tab="webapps">
                                <h3>Web Apps</h3>
                                <p>On mobile devices, web apps are very similar to native apps but are accessed through a web browser. They are designed to be highly responsive to scale to fit the various mobile device screen sizes.</p>
                            </button>
                        </div>
                        <div class="inner-tabbing">
                            <button class="tab-button" data-tab="hybrid">
                                <h3>Hybrid Apps</h3>
                                <p>Web applications that look and feel like native apps are called hybrid apps. They have a responsive design, a home screen They have a responsive design, a home screen They have a responsive design, a home screen They have</p>
                            </button>
                        </div>
                        <div class="inner-tabbing">
                            <button class="tab-button" data-tab="native">
                                <h3>Native Apps</h3>
                                <p>Native apps are mobile apps created in a particular programming language for a particular operating system, such as iOS or Android. They are frequently designed so that internet connectivity is not necessary for them to function.</p>
                            </button>
                        </div>

                    </div>
                   
                </div>
    
                <!-- Right: Image Section -->
                <div class="col-md-6 image-container align-self-center">
                    <img id="ecommerce" src="assets/images/about-us-video/3854142.jpg" alt="eCommerce Image" class="active show">
                    <img id="webapps" src="assets/images/about-us-video/4183095.jpg" alt="Web Apps Image">
                    <img id="hybrid" src="assets/images/about-us-video/4333864.jpg" alt="Hybrid Apps Image">
                    <img id="native" src="assets/images/about-us-video/4065240.jpg" alt="Native Apps Image">
                </div>
            </div>
        </div>
    </section>
    



    <section class="mobile-sec-2 w-100 float-left padding-top padding-bottom bg-dark-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="get-in-touch-left">
                        <h2>What Are You Waiting For?</h2>
                        <h3>Get in Touch with our Team Today!</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="get-in-touch-right">
                        <div class="get-in-touch-right-btns">
                        <div class="get-in-touch-right-btn-1 ">
                            <a href="#">Select Package</a>
                        </div>

                        <div class="get-in-touch-right-btn-1 ml-5">
                            <a href="#">request a quote</a>
                        </div>

                        </div>
                        <div class="get-in-touch-right-content">
                            <p><i class="fas fa-phone"></i>Contact Number:<a href="#">(469) 608-8053</a></p>
                            <p><i class="fas fa-comments"></i><a href="#" onclick="Tawk_API.maximize(); return false;">start live chat</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="width: 100%; float: left; padding-top: 60px; padding-bottom: 60px; background-color: #0a0a0a;">
    <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;" id="portfolio-gallery">

            <!-- Gallery Items -->
            <!-- Repeat for each image -->
            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/1.webp" alt="App 1" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/2.webp" alt="App 2" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/3.webp" alt="App 3" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/4.webp" alt="App 4" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/5.webp" alt="App 5" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/6.webp" alt="App 6" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/7.webp" alt="App 7" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/8.webp" alt="App 8" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

            <div style="position: relative; overflow: hidden;">
                <img src="assets/images/icons/4.webp" alt="App 9" style="width: 100%; display: block;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                    background: rgba(0, 0, 0, 0.5); display: flex; align-items: center;
                    justify-content: center; color: white; font-size: 24px; opacity: 0;
                    transition: opacity 0.3s ease;"
                    onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                    <span>+</span>
                </div>
            </div>

        </div>

       
    </div>
</section>
    


    
    <section class="mobile-sec-2 w-100 float-left padding-top padding-bottom bg-dark-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="get-in-touch-left">
                        <h2>Contact us now to discuss</h2>
                        <h3>the scope of your mobile app.</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="get-in-touch-right">
                        <div class="get-in-touch-right-btns">
                        <div class="get-in-touch-right-btn-1 ">
                            <a href="{{route('price.index')}}">Select Package</a>
                        </div>

                        <div class="get-in-touch-right-btn-1 ml-5">
                            <a href="#">request a quote</a>
                        </div>

                        </div>
                        <div class="get-in-touch-right-content">
                            <p><i class="fas fa-phone"></i>Contact Number:<a href="#">(469) 608-8053 </a></p>
                            <p><i class="fas fa-comments"></i><a href="#"onclick="Tawk_API.maximize(); return false;">start live chat</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="reviews-section w-100 float-left padding-top padding-bottom bg-dark-black" data-aos="fade-up" data-aos-duration="600">
        <div class="wrapper2">
            <div id="owlslider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>Michael was great by creating my ideal logo. Following up with my requests and making adjustments as I requested. I definitely Recommend to anyone in need of designs for their company.!</p>
                     
                    </div>
                </div>
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>Michael is stellar with his creative mind in intellectual genius. I have been working with Michael for the last two years and my artwork for all three of my businesses are outstanding. I couldn’t be more happier. He takes his time. He asked lots of questions, and he really works with his client. I’m so glad that we connected. I’ll be doing a lot more business with him in the future and referring him.</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>This company has been a blessing! So patient. I’m doing a logo for club and pretty much knew basic look. However the official date and center changed few times! Each time I was told “no problem just tell us what to use, we can rework and send file” Thank you for wonderful artwork!!!</p>
                      
                    </div>
                </div>
                <div class="item">
                    <div class="profile-box bg-dark-black">
                        <p>Had a great interaction, developing a logo and business card for our family business. Feedback was quickly incorporated and the whole process (with three rounds of changes) took only a few days. Would use again!</p>
                     
                    </div>
                </div>
           
               
            </div>
        </div>
    </section>
    

@endsection