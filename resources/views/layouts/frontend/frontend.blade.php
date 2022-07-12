<!DOCTYPE html>
<html lang="en">
    <head>
         <title>{{@$gd->website_title}}</title>
        @yield('meta_data')   
        <!-- favicon -->
        <link rel="icon" href="{{asset(@$gd->favicon)}}" type="image/png" sizes="16x16" />    
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
        @stack('css')
    </head>
    <body>        
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
                            <a href="{{route('frontend.all_blogs')}}" target="_blank">
                                Blogs
                            </a>
                            <a href="{{route('frontend.contact_us')}}">
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
                <a href="{{route('frontend.index')}}" class="logo">
                    <img src="{{asset(@$gd->website_logo)}}" alt="logo_light" />
                </a>
            </div>
            <!-- menu for desktop device-->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{route('frontend.index')}}">
                            <img src="{{asset(@$gd->website_logo)}}" alt="logo" width="250"/>
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('frontend.index')}}" class="nav-link {{!empty($activeClass)?(($activeClass=='index')?'active':''):''}}"><i class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle {{!empty($activeClass)?(($activeClass=='about_us')?'active':''):''}}">About us</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('frontend.about')}}" class="nav-link {{($activeClass=='about_us')?(($pageType=='corporate')?'active':''):''}}" > Corporate Profile </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('frontend.people')}}" class="nav-link {{($activeClass=='about_us')?(($pageType=='our_people')?'active':''):''}}"> Expertise: Our People </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('frontend.mddesk')}}" class="nav-link {{($activeClass=='about_us')?(($pageType=='md_desk')?'active':''):''}}">
                                                MD's Desk
                                            </a>
                                        </li>
                                       {{-- <li class="nav-item">
                                            <a href="{{route('frontend.letter')}}" class="nav-link {{($activeClass=='about_us')?(($pageType=='letter')?'active':''):''}}">
                                                Letter to the Investors
                                            </a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a href="{{route('frontend.registrars')}}" class="nav-link {{($activeClass=='about_us')?(($pageType=='registrars')?'active':''):''}}"> Registrars </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Media
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle {{!empty($activeClass)?(($activeClass=='investment')?'active':''):''}}">Financial Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('frontend.mutual_funds')}}" class="nav-link {{($activeClass=='investment')?(($pageType=='mutual_funds')?'active':''):''}}">Mutual Fund Investments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('frontend.insurance')}}" class="nav-link {{($activeClass=='investment')?(($pageType=='insurance')?'active':''):''}}">Insurance Consulting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Stock Market</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Corporate Deposites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Portfolio Management Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Alternative Investment Fund</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Structured Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Pre IPO</a>
                                        </li>
                                    </ul>
                                </li>
                              
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle {{!empty($activeClass)?(($activeClass=='calci')?'active':''):''}}">Calculators</a>
                                    <ul class="dropdown-menu">
                                        @foreach($calc_options as $option)
                                            <li class="nav-item">
                                                <a href="{{route('frontend.calci',[$option->id,$option->page_slug])}}" class="nav-link {{($activeClass=='calci')?(($pageType == $option->page_slug)?'active':''):''}}">{{ str_replace('-',' ',$option->page_slug)}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Learn with Expert</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">MF Tools</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">MF Guide (myths)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Knowledge Series</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Jargons Simplified</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">F.A.Q.s</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Tips & Articles</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Learning Videos</a>
                                        </li>
                                        <li class="nav-item"> 
                                            <a href="#" class="nav-link">MF Factsheet</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item {{!empty($activeClass)?(($activeClass=='index')?'active':''):''}}N">
                                    <a href="#" class="nav-link dropdown-toggle">Investor Corner</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Customer Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Invest Online/Offline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Email Subscription</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Know Your Customer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('frontend.mf_forms')}}" class="nav-link {{!empty($activeClass)?(($activeClass=='mf_forms')?'active':''):''}}">Downloadable Forms</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Complaint Redressel Form</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Electronic Payouts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Redeem/ Start SIP</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header area -->
        @yield('frontend_content')

        <!-- start footer area -->
        <footer class="footer-area pt-100 pb-70 bg-thin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="navbar-brand">
                                <a href="{{route('frontend.index')}}">
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
                                    <a href="{{route('frontend.about')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.career')}}">Career at VSRK</a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.mf_forms')}}">Mf Forms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{route('frontend.contact_us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Contact info</h5>
                            <div class="contact-info">
                                <i class="envy envy-pin"></i>
                                <p><a href="{{@$gd->google_location}}" target="_blank">{{@$gd->office_location}}</a></p>   
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
                    <div class="col-m-12">
                        <p class="text-justify">*Whether you are a first-time investor or a seasoned campaigner, planning is always the first step towards your investment journey. By using our smart tools such as – Retirement Tool, Systematic Investment Planner, SWP Calculator and Return Value Calculator. You can plan your investments well and create wealth in the long-run.</p>
                        <p class="text-justify"><b>Disclaimer</b>: Mutual Fund Investment Planning - This content is for information purposes only and is not an offer to sell or a solicitation to buy any mutual fund units/securities.These views alone are not sufficient and should not be used for the development or implementation of an investment strategy. It should not be construed as investment advice to any party. All opinions and estimates included here constitute our view as of this date and are subject to change without notice. Neither SBI Mutual Fund / SBI Funds Management Private Limited / SBI Mutual Fund Trustee Company Private Limited, nor any person connected with it, accepts any liability arising from the use of this information. The recipient of this material should rely on their investigations and unlike the traditional investment avenues like PPF, NSC, Bank Fixed Deposit, investment in mutual funds is subject to market risks. Hence, the performance of these asset classes is not strictly comparable. In view of the individual circumstances and risk profile, each investor is advised to consult their investment/tax adviser(s) before any investment decision.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer area -->

        <!-- start copy right area -->
        <div class="copy-right-area">
            <div class="container">
                <div class="copy-right-content">
                    <p>All rights reserves &copy; {{date('Y')}} <a href="{{ route('frontend.index')}}" style="text-transform:uppercase;">{{ @$gd->website_title }}</a></p>
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
        <!--chart Js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
       
        <!-- form validator -->
        <script src="{{asset('frontend/js/form-validator.min.js')}}"></script>
        <!-- contact form JS -->
        <script src="{{asset('frontend/js/contact-form-script.js')}}"></script>
        <!-- ajaxchimp JS -->
        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <!--form submission Js-->
        <script>
                function submitForm(formId){
                   const data = $('#'+formId).serialize();
                   
                    $.ajax({
                        type: "POST",
                        url: "{{route('frontend.form_process')}}",
                        headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                        data: data,
                        success : function(text){
                            //console.log(text)
                            if (text == "success"){
                                formSuccess(formId);
                            } else {
                                formError(formId);
                                submitMSG(false,text);
                            }
                        }
                    });
                }
                

                function formSuccess($this){
                    $('#'+$this)[0].reset();
                    submitMSG(true, "Message Submitted!")
                }

                function formError($this){
                    $('#'+$this).removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $(this).removeClass();
                    });
                }

                function submitMSG(valid, msg){
                    if(valid){
                        var msgClasses = "alert alert-success vsrk-alert";
                    } else {
                        var msgClasses = "alert alert-danger vsrk-alert";
                    }
                    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg).delay(3000).fadeOut(1000);
                }
        </script>

        <!-- main JS -->
        <script src="{{asset('frontend/js/main.js')}}"></script>

        @stack('js')
                
        @if (Session::has('form_messsage'))
            <div class="alert alert-success vsrk-alert">Form Submit Successfully</div> 
            <script>
                $('.vsrk-alert').delay(3000).fadeOut(1000);
            </script>
        @endif

    </body>
</html>
