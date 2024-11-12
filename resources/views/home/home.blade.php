<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mush Room</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo1.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/jmr.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <section id="header" class="header-area">
        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/jmrkcl.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#feature">Features</a></li>
                                    <li><a href="#download">Download</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>






<!-- ##### HOME AREA Start ##### -->
<section id="home" class="testimonial-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <div class="slider-content">
                        <!-- Area Gambar dengan 3 gambar -->
                        <div class="image-container">
                            <img src="{{ asset('img/bg-img/org2.png') }}" alt="Mushroom Image" class="slider-image active" id="image1">
                            <img src="{{ asset('img/bg-img/now.png') }}" alt="Mushroom Image" class="slider-image" id="image2">
                            <img src="{{ asset('img/bg-img/tgn.png') }}" alt="Mushroom Image" class="slider-image" id="image3">
                            
                            <!-- Indikator Bulat Dipindah ke sini -->
                            <div class="indicator">
                                <span class="dot active" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                        <!-- Area Konten Teks -->
                        <div class="text-content">
                            <h2>Fresh Mushrooms, Directly from Farmers to Your Door!</h2>
                            <p>Mush Room simplifies the mushroom trade. Connect directly with farmers to buy or sell the freshest mushrooms with just a few taps. Your trusted platform for quality and convenience.</p>
                            <div class="button-container">
                                <a href="#download" class="btn alazea-btn2">DOWNLOAD NOW!</a>
                                <a href="{{ route('signin.form') }}" class="btn alazea-btn1">SIGN IN</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ##### HOME AREA End ##### -->






    

    <section id="feature" class="features-section">
        <h1 class="features-title">OUR FEATURE</h1>
        <p class="features-subtitle">Ini sub keterangan</p>
        
        <div class="features-container">
            <!-- Left Features -->
            <div class="features-left">
                <div class="feature">
                    <div class="feature-icon">01</div>
                    <h3>Easy To Use</h3>
                    <p>Simple, intuitive interface for seamless transactions.</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">02</div>
                    <h3>24/7 Support</h3>
                    <p>Always available to assist, anytime you need it.</p>
                </div>
            </div>

            <!-- Image in the Center -->
            <div class="feature-image">
                <img src="{{ asset('img/bg-img/hpp.png') }}" alt="Phone Mockup">
            </div>

            <!-- Right Feature -->
            <div class="features-right">
                <div class="feature">
                    <div class="feature-icon">03</div>
                    <h3>Stunning Design</h3>
                    <p>Modern, sleek design for an enjoyable experience.</p>
                </div>
            </div>
        </div>
    </section>



<!-- ##### Feature Area End ##### -->







     <!-- ##### Download Area Info Start ##### -->
     <section id="download">
     <div class="contact-area-info section-padding-0-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Contact Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="contact--thumbnail">
                        <img src="{{ asset('img/bg-img/hp1.png') }}" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Expand Your Mushroom Farming Business with Mush Room</h2> <br>
                        <p>Mush Room is a powerful mobile app that connects mushroom farmers with a larger market. 
                            A better way to sell and promote your mushroom harvest, all in one place.</p>
                    </div>
                    <!-- Contact Information -->
                    <a href="https://www.apple.com/id/app-store/" target="_blank">
                        <input type="image" src="{{ asset('img/bg-img/gplay.png') }}" alt="Teks Alt" class="image-button" />
                    </a>
                      
                    <a href="https://play.google.com/store" target="_blank">
                        <input type="image" src="{{ asset('img/bg-img/gpla.png') }}" alt="Teks Alt" class="image-button" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ##### Download Area Info End ##### -->




<!-- ##### Contact Area Start ##### -->
<section id="contact" class="our-services-area">
    <div class="contact-container">
        <!-- Contact Info Section -->
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>We're here to help! If you have any questions, feedback, or need assistance with the MushRoom app, please don't hesitate to get in touch with us.</p> <br><br>

            <div class="single-service-area">
                <div class="service-icon">
                    <img src="img/core-img/jmr.png" alt="Email Icon">
                </div>
                <div class="service-text">
                    <p>Email: <a href="supportmushroom@gmail.com"> supportmushroom@gmail.com</a></p>
                </div>
            </div>

            <div class="single-service-area">
                <div class="service-icon">
                    <img src="img/core-img/jmr.png" alt="Phone Icon">
                </div>
                <div class="service-text">
                    <p>Phone: +21 654 789</p>
                </div>
            </div>

            <div class="single-service-area">
                <div class="service-icon">
                    <img src="img/core-img/jmr.png" alt="Website Icon">
                </div>
                <div class="service-text">
                    <p>Website: <a href="https://mushroom.com">https://mushroom.com</a></p>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="contact-form">
            <h3>Send a Message</h3>
            <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email Address">

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Message"></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</section>

<!-- ##### Contact Area End ##### -->







<!-- ##### Footer Area Start ##### -->
<section id="footer" class="footer-area bg-img" style="background-color: rgb(68, 37, 0);">
    <div class="main-footer-area">
        <div class="container">
            <div class="row d-flex">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="footer-logo mb-30">
                            <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <div class="social-info">
                            <a href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="https://x.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-9">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="single-footer-widget">
                                <div class="widget-title">
                                    <h5>PRIVACY</h5>
                                </div>
                                <nav class="widget-nav">
                                    <ul>
                                        <li><a href="privacy.html">Privacy Policy</a></li>
                                        <li><a href="privacy.html">Terms &amp; Condition</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-footer-widget">
                                <div class="widget-title">
                                    <h5>SERVICES</h5>
                                </div>
                                <nav class="widget-nav">
                                    <ul>
                                        <li><a href="feature.html">Features</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-footer-widget">
                                <div class="widget-title">
                                    <h5>SUPPORT</h5>
                                </div>
                                <nav class="widget-nav">
                                    <ul>
                                        <li><a href="privacy.html">Contact Us</a></li>
                                        <li><a href="privacy.html">Help Center</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-footer-widget">
                                <div class="widget-title">
                                    <h5>INFORMATION</h5>
                                </div>
                                <nav class="widget-nav">
                                    <ul>
                                        <li><a href="privacy.html">FAQ</a></li>
                                        <li><a href="privacy.html">User Guide</a></li>
                                        <li><a href="aboutus.html">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End of main row -->
        </div>
    </div>


    <div class="footer-divider"></div>

    <!-- Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="footer-separator"></div> <!-- Garis pemisah -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                    <p>&copy; Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website was made by <a href="https://www.instagram.com" target="_blank">Terserah</a></p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <nav>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#feature">About</a></li>
                                <li><a href="#download">Download</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Footer Area End ##### -->






    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>

</body>

</html>