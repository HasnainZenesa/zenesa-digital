@extends('layouts.front')
@section('content')
<section class="banner-sec about-banner w-100 float-left bg-light-black">
        <div class="wrapper2"> 
           <div class="refundpolicy-banner">
            <h1>Client Reviews</h1>
            
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
    <section class="reviews-section w-100 float-left padding-top padding-bottom bg-light-black" data-aos="fade-up" data-aos-duration="600">
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
    

@endsection