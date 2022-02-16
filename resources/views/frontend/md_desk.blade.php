@extends('layouts.frontend.frontend', ['activeClass' => 'about_us','pageType'=>'md_desk'])
@section('frontend_content')
   <!-- start page title area-->
   <section id="md-desk" class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>MD's Desk</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">About</a></li>
                        <li class="item"><a href="javascript:void(0)">MD's Desk</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
               <!--start md desk section-->
        <div class="about-section ptb-50 text-justify">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-sm-12 pb-30">
                        <div class="section-title">
                            <h2>M.D.’s Desk</h2>
                        </div>
                        <div class="about-text-blc">
                            <p>Mr. Swapnil Aggarwal, Managing Director of VSRK Capital, has been actively managing Funds since 2017. A young dynamic entrepreneur who is one of the promoters of the Company. With his ambition of making VSRK Capital Pvt. Ltd. as one of the most prestigious investment advisory houses, has consistently shown his sincerity & dedication to convert his dream into a reality.</p>
                            <p>His skills and knowledge have been serving the organization as a catalyst for growth, in terms of various initiatives taken for the success of the Company. He is deeply involved in the day to day marketing initiative, Administrative work and other operational work in a manner mutually beneficial to the company as well as the clients. Under his leadership, the company has added numerous well-reputed HNI Clients, Corporate Clients, and Retails Clients. He has been instrumental in developing the strong channel of business associates. </p>
                            <p>He wishes to integrate the organization & deep wisdom with technology so as to develop an adequate mix of both and give access to clients to transact through mobile applications with a single click. Leaving no stone unturned to serve the investor in every way possible and to enhance the company’s reach to clients in different parts of the world. He is amongst one of the well known personalities to be featured on various business channels, such as Zee Business, for providing their valuable know-how on wealth-creation and other financial annexures.</p>
                        </div>
                      
                    </div>
                    <div class="col-lg-4 col-sm-12 pb-30">
                        <div class="about-img text-center">
                            <img src="{{asset($team->profileImg)}}" class="img-fluid" id="md-desk-img" alt="{{$team->name}} image">
                        </div>
                    </div>
                </div>
                <div class="row ">
                <div class="col-md-6">
                        <img src="{{asset('frontend/img/about/vision.png')}}" class="img-fluid" alt="mission-vision-image">
                    </div>
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Mission</h2>
                        </div>
                        <p>Our Company believes in the philosophy of “Price is what you pay. Value is what you get”. Our sole mission is to build client’s wealth through capital appreciation and risk management.</p>
                        <div class="section-title">
                            <h2>Vision</h2>
                        </div>
                        <p>Our vision is to be a trusted partner for our clients and a respected leader in global asset management.</p>
                    </div>
                  
                </div>
            </div>
            </div>
        </section>
        <!-- end page title area -->

     
      
        @include('partials.frontend.testimonial',compact('testimonials'))
        <!--end md desk section-->

@endsection