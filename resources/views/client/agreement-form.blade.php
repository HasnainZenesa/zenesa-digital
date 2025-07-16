<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png')}}">
    <title>Zenesa Digital</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/cdn.jsdelivr.net_npm_swiper@10_swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/superclasses.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile.css')}}">
</head>

<body>
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- Popup Modal -->

    <!-- <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <img src="{{ asset('assets/images/Get a Custom, Professional Website for Just $95 – Boost Your Business Online!.jpg')}}"
                alt="Popup Image">
            <div class="pop-up-btn">
                <a href="contact.html">Sign Up</a>
            </div>
        </div>
    </div> -->


    <!-- Preloader -->
    <!-- navbar section -->
    <div class="navbar-main-sec w-100 float-left index-page-navbar">
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/images/zenesadigital.png')}}" alt="AiMentor-logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggle">
                    <ul class="navbar-nav mr-auto my-2 my-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logo.index') }}">Logo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.index') }}">Web Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('digitalmarketing.index') }}">Digital Marketing </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mobileapp.index') }}">Mobile App </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.index') }}">Portfolio </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">Contact Us</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>

    <div class="container" style="margin-top: 100px;">
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

            <form method="POST" action="{{ route('client.submitAgreement') }}">
                @csrf
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white text-center">
                        <h2>Social Media Management Agreement
</h2>
                    </div>
                    <div class="card-body">
                        <p>This Social Media Management Agreement is made between Zenesa Digital, located at 3720 Southwest Fwy, Houston, TX 77098 and client. This Agreement outlines the terms and conditions under which the Agency shall provide social media marketing services to the Client.</p>
                        <ul class="list-unstyled">
                            <li><strong>Start Date: </strong> July 7, 2025</li>
                            <li><strong>End Date:</strong>January 31, 2026</li>
                            <li><strong>Contact:</strong> (469) 608-8053</li>
                            <li><strong>Email:</strong> info@zenesadigital.com</li>
                            <div class="grid grid-cols-2 gap-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $data['name'] }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ $data['email'] }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Package</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $data['address'] }}" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="contact" class="form-label">Contact Number</label>
                                    <input type="text" name="contact" class="form-control"
                                        value="{{ $data['contact'] }}" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="payment" class="form-label">Payment Amount</label>
                                    <input type="text" name="payment" class="form-control"
                                        value="{{ $data['payment'] }}" readonly>
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="package" class="form-label">Selected Package</label>
                                    <input type="text" class="form-control"
                                        value="{{ $data['package'] ?? 'Not Selected' }}" readonly>
                                </div> -->
                                <div class="mb-3 col-span-2">
                                    <input hidden type="text" name="date" class="form-control"
                                        value="{{ $data['date'] }}" readonly>
                                </div>

                            </div>
                        </ul>
                        1.Services</h5>
                        <ul>
                            <p>The Agency agrees to provide social media management services as outlined in the agreed-upon scope of work ("SOW"). Services are focused on organic marketing efforts and do not include paid advertisements or sponsored campaigns unless otherwise specified in the SOW.</p>
                            <p>{{ $data['scope_of_services'] }}</p>
                        </ul>

                        <!-- Section 2 -->
                        <h5 class="mt-4">2. Payment Terms</h5>
                        <p>The Client agrees to pay an initial fee of
                            <strong>{{ $data['payment'] }}</strong> for the services outlined in Section 1. </p>
                        <!--<ol>-->
                        <!--    <p>{{ $data['payment_terms'] }}</p>-->
                        <!--</ol>-->

                        <!-- Section 3 -->
                        <h5 class="mt-4">3. Deliverables</h5>
                        <p>The Agency will provide the following deliverables each month:</p>
                        <p>• 4 professionally edited and branded videos or reels</p>
                        <p>• 12 custom-designed social media posts, including captions and hashtags</p>

                        <!-- Section 4 -->
                        <h5 class="mt-4">4. Platforms Covered</h5>
                        <p>The social media management services will be provided for the following platforms:

</p>
                        <p>• Facebook</p>
                        <p>• Instagram</p>
                        <p>• TikTok</p>
                        <p>• Youtube</p>

                        <!-- Section 5 -->
                        <h5 class="mt-4">5. Intellectual Property and Ownership rights</h5>
                        <p>• Upon full payment, the Client will have full rights to use the final deliverables. The Agency retains the right to display the work in its portfolio or for marketing purposes.</p>
                        <p>• Any third-party elements (e.g., stock images, fonts) incorporated into the design may be subject to their respective licensing terms, and the Client is responsible for ensuring proper usage.</p>

                        <!-- Section 6 -->
                        <h5 class="mt-4">6. Ownership & Rights</h5>
                        <p>• Upon final delivery and full payment, all content created under this Agreement will become the property of the Client.</p>
                        <p>• Zenesa Digital retains the right to display the content for portfolio or promotional use unless otherwise agreed in writing.</p>

                        <!-- Section 7 -->
                        <h5 class="mt-4">7. Termination</h5>
                        <p>In the event of termination, the Client will be responsible for payment for all work completed up to the date of termination.</p>

                        <!-- Section 8 -->
                        <h5 class="mt-4">8. Confidentiality</h5>
                        <p>Both parties agree to maintain the confidentiality of any proprietary or confidential
                            information shared during the course of this Agreement.</p>

                        <!-- Section 9 -->
                        <h5 class="mt-4">9. Governing Law</h5>
                        <p>This Agreement shall be governed by and construed by the laws of the State of Texas, USA,
                            without regard to its conflict of law principles.</p>

                        <!-- Section 10 -->
                        <h5 class="mt-4">10. Entire Agreement</h5>
                        <p>This Agreement, including any SOWs and attachments, constitutes the entire agreement between the parties and supersedes any prior written or oral agreements.</p>

                        <!-- Section 11 -->
                        <h5 class="mt-4">11.Dispute Resolution</h5>
                        <p>In the event of a dispute, both parties agree to attempt resolution through mediation before pursuing legal action.</p>

                        <!-- Section 12 -->
                        <h5 class="mt-4">12. Electronic Signature</h5>
                        <p>This Agreement shall be signed electronically, and such signatures shall be deemed valid and binding. By accepting this Agreement, the Client acknowledges that they have read, understood, and agree to be bound by the terms and conditions set forth herein.</p>
                        <canvas id="signature-pad" style="border: 1px solid #ccc; height:200px; width:100%;"></canvas>
                        <input type="hidden" name="signature" id="signature-input">
                        <button type="button" id="clear-signature" class="btn btn-warning" style="font-color:white;">Clear</button>

                        <label>
                            <input type="checkbox" name="agreement" required> I agree to the terms and conditions stated
                            in this Agreement.
                        </label>

                        <button type="submit" class="btn btn-success">Submit</button>
            </form>

            <script src="https://cdn.jsdelivr.net/npm/signature_pad"></script>
            <script>
                const canvas = document.getElementById('signature-pad');
                const signaturePad = new SignaturePad(canvas);

                document.getElementById('clear-signature').addEventListener('click', () => {
                    signaturePad.clear();
                });

                document.querySelector('form').addEventListener('submit', () => {
                    if (!signaturePad.isEmpty()) {
                        const signatureData = signaturePad.toDataURL('image/png'); // Base64 image
                        document.getElementById('signature-input').value = signatureData; // Hidden input
                    } else {
                        alert('Please provide a signature!');
                    }
                });
            </script>


            <script src="https://cdn.jsdelivr.net/npm/signature_pad"></script>
            <script>
                const canvas = document.getElementById('signature-pad');
                const signaturePad = new SignaturePad(canvas);

                document.getElementById('clear-signature').addEventListener('click', () => {
                    signaturePad.clear();
                });

                document.querySelector('form').addEventListener('submit', () => {
                    if (!signaturePad.isEmpty()) {
                        const signatureData = signaturePad.toDataURL('image/png'); // Base64 image
                        document.getElementById('signature-input').value = signatureData; // Hidden input
                    } else {
                        alert('Please provide a signature!');
                    }
                });
            </script>
        </div>
    </div>
    </div>
    </div>
    <!-- footer section-->
    <section class="footer-main-sec w-100 float-left  padding-bottom bg-dark-black">
        <div class="wrapper2">
            <div class="footer-inner-section">
                <div class="footer-logo footer-box">
                    <a href="index.html">
                        <figure>
                            <img src="{{ asset('assets/images/zenesadigital.png')}}" alt="">
                        </figure>
                    </a>
                    <p class="mb-0">Copyright © 2025 Zenesa Digital.</p>
                    <p>All Rights Reserved.</p>
                    <ul class="list-unstyled mb-0">
                        <li><span class="d-block">Social Media</span></li>
                        <li class="d-inline-block ml-0"><a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="d-inline-block"><a href="https://www.instagram.com/"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="d-inline-block mr-0"><a href="https://pk.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="footer-box">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Agreement</a></li>
                        <li><a href="#">Client Reviews</a></li>
                        <li><a href="#">About Us</a></li>
                        <li class="mb-0"><a href="#">Refund Policy</a></li>
                        <li class="mb-0"><a href="#">Privacy Policy</a></li>
                        <li class="mb-0"><a href="#">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-box address-box">
                    <h4>Address</h4>
                    <ul class="list-unstyled">
                        <li class="position-relative"><i class="fas fa-map-marker-alt"></i> 3720 Southwest Fwy Houston
TX 77098</li>
                        <li class="position-relative"><i class="fas fa-phone-volume"></i> <a href="tel:4696088053">(469) 608-8053</a></li>
                        <li class="mb-0 position-relative"><i class="fas fa-envelope"></i> <a
                                href="mailto:info@zenesadigital.com">info@zenesadigital.com</a></li>
                    </ul>
                </div>
                <div class="footer-box footer-form-box">
                    <h4>Newsletter Signup</h4>
                    <ul class="list-unstyled">
                        <li class="position-relative mb-0"><input class="bg-light-black" type="text"
                                placeholder="Enter Your Email Address"> <button>Send</button></li>
                    </ul>
                    <form action="#">
                        <input type="checkbox" id="policy" name="policy" value="Bike">
                        <label for="policy" class="check-box"></label>
                        <label for="policy"> I agree to the <a href="#">Privacy Policy</a>.</label><br>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- <a id="button" class="show"></a> -->
    <!-- footer section-->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('assets/js/aos.js')}}"></script>
    <script src="{{ asset('assets/js/cdn.jsdelivr.net_npm_swiper@10_swiper-bundle.min.js')}}"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            spaceBetween: 10,
            autoplay: {
                delay: 0,
                pauseOnMouseEnter: true,        // added
                disableOnInteraction: false,    // added
            },
            breakpoints: {
                360: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                576: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 7,
                    spaceBetween: 10,
                },
            },

            speed: 4000,
        })
        $(window).on('load', function () {
            // Preloader
            $('.loader').fadeOut();
            $('.loader-mask').delay(350).fadeOut('slow');
        });
        var btn = $('#button');
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            }
            else {
                btn.removeClass('show');
            }
        });
        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });
        window.addEventListener('load', function () {
            document.querySelector('body').classList.add("loaded")
        });
        AOS.init();
        $('#owlsliderone').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            animateOut: 'slideInLeft',
            animateIn: 'slideOutRight',
            responsive: {
                0: {
                    items: 2,
                    margin: 15
                },
                576: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script>
        $('#owlslider').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            animateOut: 'slideInLeft',
            animateIn: 'slideOutRight',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
    <script>
        const lightbox = document.createElement('div')
        lightbox.id = 'lightbox'
        document.body.appendChild(lightbox)

        const images = document.querySelectorAll('.images img')
        images.forEach(image => {
            image.addEventListener('click', e => {
                lightbox.classList.add('active')
                const img = document.createElement('img')
                img.src = image.src
                while (lightbox.firstChild) {
                    lightbox.removeChild(lightbox.firstChild)
                }
                lightbox.appendChild(img)
            })
        })

        lightbox.addEventListener('click', e => {
            if (e.target !== e.currentTarget) return
            lightbox.classList.remove('active')
        })
    </script>
    <script>
        $(".box-video").click(function () {
            $('iframe', this)[0].src += "&amp;autoplay=1";
            $(this).addClass('open');
        });

        const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";

        $(window).on("load resize", function () {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                    function () {
                        const $this = $(this);
                        $this.addClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "true");
                        $this.find($dropdownMenu).addClass(showClass);
                    },
                    function () {
                        const $this = $(this);
                        $this.removeClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "false");
                        $this.find($dropdownMenu).removeClass(showClass);
                    }
                );
            } else {
                $dropdown.off("mouseenter mouseleave");
            }
        });
    </script>




    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("videoModal");
            const iframe = document.getElementById("youtubeVideo");
            const closeModal = document.querySelector(".close");

            document.querySelectorAll(".watch-video").forEach(button => {
                button.addEventListener("click", function () {
                    const videoUrl = this.getAttribute("data-video");
                    iframe.src = videoUrl;
                    modal.style.display = "flex";
                });
            });

            closeModal.addEventListener("click", function () {
                modal.style.display = "none";
                iframe.src = ""; // Stop video when closing modal
            });

            window.addEventListener("click", function (event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                    iframe.src = ""; // Stop video
                }
            });
        });

    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("videoModal");
            const closeModal = document.querySelector(".close");
            const iframe = document.getElementById("youtubeVideo");

            // Ensure modal is hidden on load
            modal.style.display = "none";
            iframe.src = ""; // Prevent autoplay on reload

            document.querySelectorAll(".watch-video").forEach((button) => {
                button.addEventListener("click", function () {
                    const videoSrc = this.getAttribute("data-video");
                    iframe.src = videoSrc + "?autoplay=1"; // Auto-play video on click
                    modal.style.display = "flex"; // Show modal only on click
                });
            });

            closeModal.addEventListener("click", function () {
                modal.style.display = "none";
                iframe.src = ""; // Stop video when closed
            });

            window.addEventListener("click", function (event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                    iframe.src = "";
                }
            });
        });


    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const popup = document.getElementById("popup");
            const closePopup = document.querySelector(".popup .close");

            // Show popup when page loads
            popup.style.display = "flex";

            // Close popup on button click
            closePopup.addEventListener("click", function () {
                popup.style.display = "none";
            });

            // Close popup if user clicks outside the modal
            window.addEventListener("click", function (event) {
                if (event.target === popup) {
                    popup.style.display = "none";
                }
            });
        });

    </script>

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/660ac903a0c6737bd12712df/1hqd22eaf';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?91553';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = false; // Ensure script loads before execution
            s.src = url;

            var options = {
                "enabled": true,
                "chatButtonSetting": {
                    "backgroundColor": "#25D366",
                    "ctaText": "Chat with us",
                    "borderRadius": "25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI": false,
                    "position": "right"
                },
                "brandSetting": {
                    "brandName": "My Website",
                    "brandSubTitle": "Support Team",
                    "brandImg": "https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText": "Hi there! 👋 How can I assist you today?",
                    "messageText": "Hello! %0A I have a question about: " + window.location.href,
                    "backgroundColor": "#00e785",
                    "ctaText": "Chat on WhatsApp",
                    "borderRadius": "50",
                    "autoShow": false,
                    "phoneNumber": "13023295114" // Your WhatsApp number with country code
                }
            };

            s.onload = function () {
                if (typeof CreateWhatsappChatWidget !== "undefined") {
                    CreateWhatsappChatWidget(options);
                } else {
                    console.error("WhatsApp Widget failed to load!");
                }
            };

            document.body.appendChild(s);
        });
    </script>




</body>

</html>