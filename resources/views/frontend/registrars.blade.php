@extends('layouts.frontend.frontend', ['activeClass' => 'about_us','pageType'=>'registrars'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white text-justify">
            <div class="container">
                <div class="page-title-content">
                    <h1>Registrars</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">About</a></li>
                        <li class="item"><a href="javascript:void(0)">Registrars</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
            
        <!--start CAMS section-->
        <section id="corporate_profile" class="about-section pt-50 bg-white">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12 pb-30">
                        <div class="section-title">
                            <h2>CAMS</h2>
                        </div>
                        <div class="about-text-blc">
                            <p>CAMS is a technology driven financial infrastructure and services provider to Mutual Funds and other financial institutions for over two decades. As the market leading Registrar and Transfer Agency to the Indian Mutual Fund industry, CAMS serves ~70% of the average assets under management – as of August 2021. We also provide technology enabled service solutions to Alternative Investment Funds and Insurance Companies. Besides serving as a B2B service partner, CAMS also serves customers through a variety of touch points such as pan-India network of service centres, white label call centre, online, mobile app and chatbot.</p>
                            <p>CAMS’ competitive technology advantage stems from the capability, functionality, integration and scalability of our proprietary platforms, which deliver breadth and quality of service and cost efficiencies. Our Transfer Agency platform is the largest platform serving the Mutual Fund segment in India and has enabled rapid scaling of the industry while managing the complexities of business operations. We run our own Data Centres on completely virtualized Hyper Converged Infrastructure (HCI) and build and host hundreds of Applications & APIs. Our BI platforms power Mutual Fund Industry Analytics. Robotic Process Automation (RPA) Bots have been deployed to improve productivity and efficiency. We have adopted digital and AI & ML (Artificial Intelligence & Machine Language) technologies to solve business problems.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 pb-30">
                        <div class="about-img">
                            <img src="{{asset('frontend/img/about/cams-image.png')}}" alt="cams-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end CAMS section-->

        <!--start KARVY section-->
        <section id="assistance" class="page-section ptb-50 text-justify">
            <div class="new-section-title section-title">
                <h3 class="text-white"><span class="qoutes">"</span> Technology is at the Core of CAMS’ Services <span class="qoutes">"</span></h3>
            </div>
            <div class="container pt-50">
                   <div class="row align-items-center"> 
                    <div class="col-lg-6 col-sm-12">
                        <img src="{{asset('frontend/img/about/diversify.png')}}" alt="KARVY diversify">
                    </div>
                      <div class="col-lg-6 col-sm-12 ">
                            <h2 class="h2-heading">KARVY</h2>
                            <div class="about-text-blc">
                                <p>Karvy’s business entities address a heterogeneous swathe of population from the super rich, to the nouveau riche, the ubiquitous middle class, the lower classes (the SEC E3 according to the new Social Economic Classification), urban and the rural folks. All of whom either make a living through large business (corporate world), SMEs, professional services, traders, farmers, labour, blue and white collar jobs and the government.</p>
                                <p>Another key feature of Karvy has been its ability to offer leading edge advice based on incisive ideas that are strongly rooted in high quality research on every conceivable aspect of investments be it equities, forex, commodities, bonds, fixed returns, debt instruments or any other investment grade asset class.</p>
                                <p>The Karvy Group is today a well diversified conglomerate. Its businesses straddle the entire financial services spectrum as well as a host of non-financial services. Recently, the Group has diversified into data analytics, market research and alternate energy (solar). Karvy prides itself on remaining customer centric as always through a combination of leading edge technology, Professional management and a wide network of offices across India. Karvy is committed to its quest as an Equal Opportunity Employer and believes in the rights for differently-abled persons. We have over 12% employees who are challenged in some form in one of our prominent businesses.</p>
                            </div>                            
                          </div>
                      </div>
                </div>
            </div>
        </section>
        </div>
        

        @include('partials.frontend.app-section')
        @include('partials.frontend.client',compact('brand_logo'))
        <!-- end page title area -->

@endsection