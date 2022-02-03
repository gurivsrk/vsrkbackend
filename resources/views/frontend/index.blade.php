@extends('layouts.frontend.frontend')
@section('frontend_content')
        <!-- start home banner area -->
        <div id="home" class="home-banner-area banner">
            <div class="home-slider owl-carousel">
                <div class="item">
                    <div class="container">
                        <div class="banner-content">
                            <h1>Top Mutual Fund Product List</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                            </p>
                            <div class="cta-btn">
                                <a href="#" class="btn btn-solid">Try for free</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="banner-content">
                            <h1>I have got some money</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum.
                            </p>
                            <div class="cta-btn">
                                <a href="#" class="btn btn-solid">Try for free</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="banner-content">
                            <h1>I have a financial goal</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturdo eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            </p>
                            <div class="cta-btn">
                                <a href="#" class="btn btn-solid">Try free</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end home banner area -->
        <!-- start promo section -->
        <section class="promo-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-12">
                        <div class="single-feature">
                            <div class="single-feature-content">
                                <i class="envy envy-cloud-computing1"></i>
                                <h3 class="mt-2">Feature 1</h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturdo eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            </p>
                            <div class="hover-overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="single-feature">
                            <div class="single-feature-content">
                                <i class="envy envy-code2"></i>
                                <h3 class="mt-2">Feature 2</h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturdo eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            </p>
                            <div class="hover-overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="single-feature">
                            <div class="single-feature-content">
                                <i class="envy envy-server2"></i>
                                <h3 class="mt-2">Feature 3</h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consecteturdo eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            </p>
                            <div class="hover-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end feature section -->
        
        <!--start about section-->
        <section id="about" class="about-section ptb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12 pb-30">
                        <div class="section-title">
                            <span class="subtitle">about us</span>
                            <h2>Main Heading</h2>
                        </div>
                        <div class="about-text-blc">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
                            <p>Risus commodo viverra maecenas accumsan lacus vel facilisis.!</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="about-feature-blc">
                                    <i class="envy envy-quality blue"></i>
                                    <div class="about-feature-content">
                                        <h6>Achievement 1</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="about-feature-blc">
                                    <i class="envy envy-quality red"></i>
                                    <div class="about-feature-content">
                                        <h6>Achievement 2</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cta-btn">
                            <a href="about.html" class="btn btn-solid">
                                Read more
                                <i class="envy envy-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 pb-30">
                        <div class="about-img">
                            <div class="grid-img">
                                <div class="grid-img-inner">
                                    <img src="{{asset('frontend/img/about/about_1.png')}}" class="image-responsive" alt="office_image" />
                                </div>
                                <div class="grid-img-inner">
                                    <img src="{{asset('frontend/img/about/about_2.png')}}" class="image-responsive" alt="office_image" />
                                </div>
                                <div class="grid-img-inner">
                                    <img src="{{asset('frontend/img/about/about_3.png')}}" class="image-responsive" alt="office_image" />
                                </div>
                                <div class="grid-img-inner">
                                    <img src="{{asset('frontend/img/about/about_4.png')}}" class="image-responsive" alt="office_image" />
                                </div>
                            </div>
                            <div class="logo-overlay">
                                <img src="{{asset('frontend/img/logos/vsrk circle.png')}}" alt="logo_without_slogan" />
                            </div>
                            <div class="shape">
                                <img src="{{asset('frontend/img/resource/shape_4.png')}}" alt="shape" class="shape-inner" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end about section-->
        <section id="why-vsrk" class="ptb-70">
            <div class="container">
                <div class="row">
                    <div class="content-inner col-lg-3 col-sm-6">
                        <div class="text-center"><img src="{{asset('frontend/img/about/fp1.png')}}" class="mb-3" alt="why_us_1"></div>
                        <h5 class="text-center">Unbiased Solutions that suits your need</h5>
                        <p class="text-justify">At VSRK, we do not sell products, we advise solutions. We tailor our plans in a way that best suits your personality & investment style</p>
                    </div>
                    <div class="content-inner col-lg-3 col-sm-6">
                        <div class="text-center"><img src="{{asset('frontend/img/about/growth1.png')}}" class="mb-3" alt="growth 1"></div>
                        <h5 class="text-center">When we grow, we grow together</h5>
                        <p class="text-justify">Our revenue and success are determined by our investor’s success. This philosophy is rarely found with traditional agents.</p>
                    </div>
                    <div class="content-inner col-lg-3 col-sm-6">
                        <div class="text-center"><img src="{{asset('frontend/img/about/fees1.png')}}" class="mb-3" alt="fees1.png"></div>
                        <h5 class="text-center">24x7 Access to <br> Portfolio</h5>
                        <p class="text-justify">Each client gets an online access to their portfolios, irrespective of if you invest online or not. Just login to VSRK portfolio account.</p>
                    </div>
                    <div class="content-inner col-lg-3 col-sm-6">
                        <div class="text-center"><img src="{{asset('frontend/img/about/meeting.png')}}" class="mb-3" alt="meeting.png"></div>
                        <h5 class="text-center">Personalised advice from the experts</h5>
                        <p class="text-justify">All our advisors are specialised in the field of Finance and having an experience of 12 years + in the industry</p>
                    </div>
                </div>
            </div>
        </section>
        <!--start service section-->
        <section id="featured-service" class="featured-service-section pt-100 pb-70 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-12 pb-30">
                        <div class="featured-service-image">
                            <img src="{{asset('frontend/img/resource/service_Illustration.png')}}" alt="service_illustration" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="featured-service-content">
                            <div class="section-title">
                                <span class="subtitle">OUR SERVICES</span>
                                <h2>Main Heading for our services</h2>
                                <p>small description.</p>
                            </div>
                            <div class="row">
                                <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                    <i class="envy envy-shield"></i>
                                    <h5>Service 1</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a href="service-details.html" target="_blank" class="btn btn-text-only">
                                        read more
                                        <i class="envy envy-right-arrow"></i>
                                    </a>
                                </div>
                                <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                    <i class="envy envy-cpu"></i>
                                    <h5>Service 2</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a href="service-details.html" target="_blank" class="btn btn-text-only">
                                        read more
                                        <i class="envy envy-right-arrow"></i>
                                    </a>
                                </div>
                                <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                    <i class="envy envy-code"></i>
                                    <h5>Service 3</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a href="service-details.html" target="_blank" class="btn btn-text-only">
                                        read more
                                        <i class="envy envy-right-arrow"></i>
                                    </a>
                                </div>
                                <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                    <i class="envy envy-global"></i>
                                    <h5>Service 4</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available</p>
                                    <a href="service-details.html" target="_blank" class="btn btn-text-only">
                                        read more
                                        <i class="envy envy-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{asset('frontend/img/resource/Illustration_Cloud.png')}}" alt="clouds-shape" class="shape-inner" />
                <img src="{{asset('frontend/img/resource/rupee.png')}}" alt="rupee-bg" class="shape-inner" />
            </div>
        </section>
        <!--end service section-->

        <!-- start team section-->
        <section class="team-section ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="subtitle">OUR Team</span>
                    <h2>Meet Awesome People</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
                <div class="team-slider owl-carousel">
                    @foreach($team as $person)
                    <div class="team-item">
                        <div class="team-image">
                            <img src="{{asset($person->profileImg)}}" alt="team-member" />
                        </div>
                        <div class="team-content">
                            <h5>
                                <a href="#">{{$person->name}}</a>
                            </h5>
                            <p class="mb-2">{{$person->designation}}</p>
                           
                            <div class="social-link">
                                <a href="#" class="read-more">read more</a>
                               <!--  <a href="#" class="bg-success" target="_blank"><i class="fab fa-tumblr"></i></a>
                                <a href="#" class="bg-danger" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="bg-info" target="_blank"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end team section -->

        <!-- start graph section -->
        <section class="graph-section pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="subtitle">Calculator</span>
                    <h2>POWER OF SIP</h2>
                    <p>Here We help you to GROW your MONEY</p>
                </div>
               <div id="calC">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="sip-calc">
                                <div class="input-group">
                                    <div class="get-range-value">
                                        <label>Monthly Investment</label>
                                        <span class="type-span">₹</span>
                                        <input class="type-input" id="sipAmt" type="number" maxlength="250"  min="500" max="100000" value="25000">
                                    </div>
                                    <input class="type-range" type="range" min="500" max="100000" step="500" value="25000" style="background-size: 25% 100%;">
                                </div>
                                <div class="input-group mt-5">
                                    <div class="get-range-value">
                                        <label>Expected return rate (p.a)</label>
                                        <input class="type-input" type="number"  maxlength="250" min="1" max="30" value="12">
                                        <span class="type-span">%</span>
                                    </div>
                                    <input class="type-range" type="range" min="1" id="sipRoi"  maxlength="250" max="30" step="0.1" value="12" style="background-size: 38% 100%;">
                                </div>
                                <div class="input-group mt-5">
                                    <div class="get-range-value">
                                        <label>Time period</label>
                                        <input class="type-input" type="number"  min="1" max="30" value="10">
                                        <span class="type-span">Yr</span>
                                    </div>
                                    <input class="type-range" type="range" min="1" id="sipTime" max="30" step="1" value="10" style="background-size: 30% 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-lg-4">
                            <div id="sipChartCanvas" class="position-relative">
                                <canvas id="sipCalChat" style="width:100%;max-width:350px;max-height:350px"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-5">
                            <div class="input-group mt-1">
                                <div class="get-range-value dynamic-field">
                                    <label>Invested Amount:</label>
                                    <span id="sipInvestedAmt"></span>
                                </div>
                            </div>
                            <div class="input-group mt-3 dynamic-field">
                                <div class="get-range-value">
                                    <label>Estimated Return:</label>
                                    <span id="sipEstAmt"></span>
                                </div>
                            </div>
                            <div class="input-group mt-3 dynamic-field">
                                <div class="get-range-value">
                                    <label>Total Value:</label>
                                    <span id="sipTotalAmt"></span>
                                </div>
                            </div>
                            <div class="cta-btn mt-3">
                                <a href="#" class="btn btn-solid">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </section>
        <!-- end graph section -->

        <!-- start testimonial section  -->
        <section id="testimonial" class="testimonial-section testimonial ptb-100 bg-light">
            <div class="container">
                <div class="section-title">
                    <span class="subtitle">TESTIMONIALS</span>
                    <h2>What People Say About Us</h2>
                    <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology. Does any industry face a more complex audience.</p>
                </div>
                <div class="tesimonial-grid">
                    
                <div class="dot active">
                        <img src="{{asset('frontend/img/clients/client_1.png')}}" alt="client-1" />
                    </div>
                    <div class="dot">
                        <img src="{{asset('frontend/img/clients/client_2.png')}}" alt="client-2" />
                    </div>
                    <div class="dot">
                        <img src="{{asset('frontend/img/clients/client_3.png')}}" alt="client-3" />
                    </div>
                    <div class="dot">
                        <img src="{{asset('frontend/img/clients/client_4.png')}}" alt="client-4" />
                    </div>
                    <div class="dot">
                        <img src="{{asset('frontend/img/clients/client_5.png')}}" alt="client-5" />
                    </div>
                    <div class="dot">
                        <img src="{{asset('frontend/img/clients/client_6.png')}}" alt="client-6" />
                    </div>
                  
                    <div class="testimonial-slider owl-carousel">
                        @foreach($testimonials as $testimonial)
                            <div class="slider-item">
                                <div class="qoute-icon">
                                    <img src="{{asset('frontend/img/resource/quotation.png')}}" alt="quotation" />
                                </div>
                                <div class="inner-text" style=" {{ (Str::length($testimonial->descritption) > 350)?'font-size:13px' :'' }} ">
                                    {!! $testimonial->descritption !!}
                                </div>
                                <div class="client">
                                    <div class="client-img">
                                        <img src="{{asset($testimonial->profileImg)}}" alt="{{$testimonial->name}}" />
                                    </div>
                                    <div class="client-info">
                                        <h6>{{$testimonial->name}}</h6>
                                        <span>{{$testimonial->designation}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="overlay-img">
                        <img src="{{asset('frontend/img/background/Testimonial_bg.png')}}" alt="Testimonial_bg" />
                    </div>
                </div>
                <!-- tesimonial-grid -->
            </div>
            <div class="shape">
                <img src="{{asset('frontend/img/resource/shape_6.png')}}" alt="shape" class="shape-inner" />
                <img src="{{asset('frontend/img/resource/Ellipse_1.png')}}" alt="shape" class="shape-inner" />
                <img src="{{asset('frontend/img/resource/Rectangle_1.png')}}" alt="shape" class="shape-inner" />
                <img src="{{asset('frontend/img/resource/Ellipse_1.png')}}" alt="shape" class="shape-inner" />
                <img src="{{asset('frontend/img/resource/Rectangle_1.png')}}" alt="shape" class="shape-inner" />
                <img src="{{asset('frontend/img/resource/shape_2.png')}}" alt="shape" class="shape-inner" />
            </div>
        </section>
        <!-- testimonial section end  -->
         <!-- Start Partner Area -->
         <div class="partner-area ptb-30">
            <div class="container">
                <div class="partner-slider owl-carousel">
                @foreach($brand_logo as $logo)
                        <div class="partner-item">
                            <img src="{{asset($logo->logo)}}" alt="{{$logo->name}}" /> 
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end partner area -->
        <!--start blog section-->
        <section id="blog" class="blog-section pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="subtitle">our blog</span>
                    <h2>Our Latest Article To Help You</h2>
                    <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Does any industry faces a more complex audience.</p>
                </div>
                <div class="row justify-content-center">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-item-single">
                            <div class="blog-item-img">
                                <a href="blog-details.html">
                                    <img src="{{asset($blog->blogImage)}}" alt="blog-bg-image" />
                                </a>
                                <p class="tag">{{json_decode($blog->tags)[0]}}</p>
                            </div>
                            <div class="blog-item-content">
                                <span> <i class="envy envy-calendar"></i>{{$blog->BlogDate}}</span>
                                <a href="blog-details.html">
                                    <h3>{!!(Str::length($blog->title) < 40 ? wordwrap($blog->title, 30 , "<br>" ,true) : $blog->title)!!}</h3>
                                </a>
                                <p>
                                   {!! Str::limit($blog->descritption,200) !!}
                                </p>
                                <a href="blog-details.html" target="_self" class="btn btn-text-only">
                                    read more
                                    <i class="envy envy-right-arrow"></i>
                                </a>
                            </div>
                            <!-- blog-item-content -->
                        </div>
                        <!-- blog-item-single -->
                    </div>
                @endforeach
                </div>
                <!-- row -->
            </div>
        </section>
        <!--end blog section-->

        

        <!-- start app-section section -->
        <section class="app-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="app-section-content">
                            <div class="app-section-title">
                                <h2>Invest anywhere,<br>anytime.</h2>
                                <p>Don't worry about which device to use. Because we're in every one of them</p>
                            </div> 
                        </div>
                        <div class="row mt-4">
                            <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                <i class="envy envy-shield"></i>
                                <h5>Secure</h5>
                                <p>There are many variations of passages of Lorem Ipsum available</p>
                            </div>
                            <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                <i class="envy envy-cpu"></i>
                                <h5>Fast & Reliable</h5>
                                <p>There are many variations of passages of Lorem Ipsum available</p>
                            </div>
                            <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                <a href="#" target="_blank" class="btn btn-android btn-solid"><i class="fab fa-google-play"></i> Android App <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="content-inner col-lg-6 col-md-6 col-sm-6">
                                <a href="#" target="_blank" class="btn btn-ios btn-solid"><i class="fab fa-app-store-ios"></i> iOS App <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-12 pb-30">
                        <div class="app-section-image text-end">
                            <img src="{{asset('frontend/img/banner/app_banner.png')}}" alt="app illustration" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end app-section section -->
        <!-- start faq section -->
        <section class="faq-section ptb-100 bg-thin">
            <div class="container">
                <div class="section-title">
                    <h2>FAQ's</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
                @include('partials.frontend.faq',compact('faqs'))
            </div>
        </section>
        <!-- end faq section -->
@endsection