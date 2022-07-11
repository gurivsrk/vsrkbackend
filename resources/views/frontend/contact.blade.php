
@extends('layouts.frontend.frontend', ['activeClass' => 'contact','pageType'=>'contact'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Get In Touch</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
            
                <!-- end page title area -->
        <section class="contact-section ptb-100 bg-thin">
            <div class="container pt-100">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                     <form id="contactForm" > 
                     {{-- <form method="POST" action="{{route('frontend.form_process')}}">
                            @csrf--}}
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="Name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required="" data-error="Please enter your email" placeholder="Email" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" id="subject" required="" data-error="Please enter your phone number" placeholder="Subject" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required="" data-error="Please enter your message" placeholder="Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-solid">send message</button>
                                    <div id="msgSubmit" class="h5 text-center hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="contact-widget">
                            <div class="info-title">
                                <h5>Contact info</h5>
                            </div>
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
                                    <a href="tel:+91-9711404069">+91-9711404069</a>
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
                <div class="row">
                    <div class="col-12">
                        <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14006.205728474768!2d77.2991521!3d28.6432032!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd27a14c4fe7518b!2sVSRK%20Capital%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1657175530901!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   </div>
 

@endsection