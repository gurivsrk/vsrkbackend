<!DOCTYPE html>
<html lang="en">
    <head>
         <title>{{@$gd->website_title}}</title>
        @yield('meta_data')   
        <!-- favicon -->
        <link rel="icon" href="{{asset($gd->favicon)}}" type="image/png" sizes="16x16" />    
        <!-- bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}" />
        <!-- icon CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/icon.min.css')}}" />
         <!-- magnific popup CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}" />
        <!-- owl-carousel CSS -->
         <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" />
        <!---MENU CSS-->
        <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}" />
        <!-- main style CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
        <!-- chart CSS -->
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
        
    </head>
    <body>
        <!-- start preloader area
        <div class="preloader-main">
            <div class="loader">
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
            </div>
        </div>
        end preloader area -->
        
        <!-- start header area -->
        <header class="navbar-area">
            <div class="top-nav">
                <!-- header top -->
                <div class="container d-flex justify-content-between">
                    <!-- top left -->
                    <div class="top-left">
                        <ul class="info-list">
                            <li>
                                <i class="envy envy-email"></i>
                                <a href="mailTo:{{@$gd->website_email_primary}}">{{@$gd->website_email_primary}}</a>
                            </li>
                            <li><i class="envy envy-call"></i>
                                <a href="tel:{{@$gd->website_phone_primary}}">{{@$gd->website_phone_primary}}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- top right -->
                    <div class="top-right">
                        <div class="other-links">
                            <a href="#" target="_blank">
                                Quick Invest
                            </a>
                            <a href="#" target="_blank">
                                KYC Update
                            </a>
                            <a href="#" target="_blank">
                                Blogs
                            </a>
                            <a href="#" target="_blank">
                               Contact us
                            </a>
                            <a href="#" target="_blank">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu for mobile device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{asset(@$gd->website_logo)}}" alt="logo_light" />
                </a>
            </div>
            <!-- menu for desktop device-->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset(@$gd->website_logo)}}" alt="logo" width="300"/>
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">About us</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link"> Corporate Profile </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link"> Expertise: Our People </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">
                                                MD's Desk
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">
                                                Letter to the Investors
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Vision & Mission
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-in.html" class="nav-link"> Registrars </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-up.html" class="nav-link"> Career at VSRK </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-condition.html" class="nav-link">
                                                Fund Houses
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">
                                                Media
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Investment Solutions</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-grid.html" class="nav-link">Blog grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">blog details</a>
                                        </li>
                                    </ul>
                                </li>
                              
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Plan with Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Ways to Invest</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Learn with Expert</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Investor Corner</a>
                                </li>
                            </ul>
                            <!-- <div class="search-item">
                                <div class="search-btn">
                                    <i class="open-btn envy envy-magnify-glass"></i>
                                    <i class="close-btn envy envy-close"></i>
                                </div>
                                <div class="search-overlay search-popup">
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text" />
                                        <button class="btn btn-solid" type="submit">
                                            <i class="envy envy-magnify-glass"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="cta-btn">
                                <a href="sign-in.html" class="btn btn-solid">
                                    <i class="envy envy-user"></i>
                                    log in
                                </a>
                            </div> -->
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header area -->
        @yield('frontend_content')

        <!-- start footer area -->
        <footer class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="navbar-brand">
                                <a href="index.html">
                                    <img src="{{asset(@$gd->website_logo)}}" alt="image" />
                                </a>
                            </div>
                            <p class="text-justify">{{@$gd->website_short_description}}</p>
                            <div class="social-link">
                                @if(!empty(@$gd->facebook_link) && @$gd->facebook_link != "#")
                                    <a href="{{@$gd->facebook_link}}" class="bg-tertiary" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                @endif
                                @if(!empty(@$gd->twitter_link) && @$gd->twitter_link != "#")
                                <a href="{{@$gd->twitter_link}}" class="bg-success" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                @endif 
                                @if(!empty(@$gd->youtube_link) && @$gd->youtube_link != "#")
                                <a href="{{@$gd->youtube_link}}" class="bg-danger" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                @endif
                                @if(!empty(@$gd->linkedin_link) && @$gd->linkedin_link != "#")
                                <a href="{{@$gd->linkedin_link}}" class="bg-info" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                @endif
                                @if(!empty(@$gd->instagram_link) && @$gd->instagram_link != "#")
                                <a href="{{@$gd->instagram_link}}" class="bg-pink" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                @endif
                                @if(!empty(@$gd->pinterest_link) && @$gd->pinterest_link != "#")
                                <a href="{{@$gd->pinterest}}" class="bg-danger" target="_blank">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Our Services</h5>
                            <ul class="footer-quick-links">
                                <li>
                                    <a href="service-details.html">service 1</a>
                                </li>
                                <li>
                                    <a href="service-details.html">service 2</a>
                                </li>
                                <li>
                                    <a href="service-details.html">service 3</a>
                                </li>
                                <li>
                                    <a href="service-details.html">service 4</a>
                                </li>
                                <li>
                                    <a href="service-details.html">service 5</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Other Resources</h5>
                            <ul class="footer-quick-links">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Mf Forms</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Contact info</h5>
                            <div class="contact-info">
                                <i class="envy envy-pin"></i>
                                <p>{{@$gd->office_location}}</p>
                            </div>
                            <div class="contact-info">
                                <i class="envy envy-call"></i>
                                <p>
                                    <a href="tel:{{@$gd->website_phone_primary}}">{{@$gd->website_phone_primary}}</a>
                                </p>
                                <br>
                                <p>
                                    <a href="tel:+001-548-159-2492">+001-548-159-2492</a>
                                </p>
                            </div>
                            <div class="contact-info">
                                <i class="envy envy-plane"></i>
                                <p>
                                    <a href="mailTo:{{@$gd->website_email_primary}}">{{@$gd->website_email_primary}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer area -->

        <!-- start copy right area -->
        <div class="copy-right-area">
            <div class="container">
                <div class="copy-right-content">
                    <p>
                        Copyright @2022 VSRK Capital. Designed By

                        <a href="#" target="_blank">
                            VSRK Capital
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- end copy right area-->
        
        <!-- jequery JS -->
        <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <!-- bootstrap JS -->
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <!-- popper JS -->
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
        <!-- magnific popup JS -->
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- owl carousel JS -->
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <!-- meanmenu JS -->
        <script src="{{asset('frontend/js/meanmenu.min.js')}}"></script>
        <!-- form validator -->
        <script src="{{asset('frontend/js/form-validator.min.js')}}"></script>
        <!-- contact form JS -->
        <script src="{{asset('frontend/js/contact-form-script.js')}}"></script>
        <!-- ajaxchimp JS -->
        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <!--chart Js-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        
        <!-- main JS -->
        <script src="{{asset('frontend/js/main.js')}}"></script>

    </body>
</html>
