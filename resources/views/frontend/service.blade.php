@extends('layouts.frontend.frontend', ['activeClass' => 'investment','pageType'=>'Our Services'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Our Services</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>

        <!--start Assistance section-->
        <section id="assistance" class="page-section pt-100 pb-50 assistance-style">
            <div class="container  pt-50">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <a href="{{route('frontend.mutual_funds')}}">
                            <div class="faq-item">
                                <div class="vsrk-left-img">
                                    <img src="{{asset('frontend/img/about/positive-vote.png')}}" alt="vsrk Service excellence" width="100">
                                </div>
                                <div class="vsrk-right-text">
                                    <h4>Mutual Funds</h4>
                                    <p> A mutual fund is a financial tool made up of a pool of money collected from different investors to invest in securities like stocks, bonds, etc.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <a href="{{route('frontend.insurance')}}">
                        <div class="faq-item">
                            <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/shield.png')}}" alt="vsrk Prudent risk management"  width="100">
                              </div>
                            <div class="vsrk-right-text">
                                <h4>Life Insurance</h4>
                                <p> Well this page is aimed to give you a complete understanding on how it works and what you need to understand to choose the products that suits you the best.</p>
                            </div>
                            </div>
                    </a>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/encrypted.png')}}" alt="vsrk Encryption services" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>General Insurance</h4>
                            <p> General Insurance or Non-life Insurance policies is a practical option for every person who would like to live a risk-free life.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/exchange-rate.png')}}" alt="vsrk Trade with confidence" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Corporate Deposites</h4>
                            <p>These types of deposits are offered by corporate companies. Generally, banks are the issuers of fixed deposits services or products in India.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/database.png')}}" alt="vsrk Real time margin protection" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>PMS</h4>
                            <p>Portfolio Management Services is a professional service provided by qualified and experienced managers, supported by an experienced research team, who manages portfolios on behalf of clients rather than the clients themselves.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/risk.png')}}" alt="vsrk Negative balance protection" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Structured Products</h4>
                            <p>We offer investment management and advisory services to individuals who not only understand the long-term potential of equities as an asset class, but also understand the associated risks.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/graphic-tool.png')}}" alt="vsrk Advanced tools" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Alternate Investment Funds (AIF’s)</h4>
                            <p>Alternate Investment Funds (AIF’s) are investments primarily done by HNI’s or institutional investors into asset classes other than stocks, bonds and cash.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/accounting.png')}}" alt="vsrk Segregated bank accounts" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>PRE-IPO/Unlisted Stocks</h4>
                            <p>Pre-IPO refers to investing in stocks that are not listed on a stock exchange. Most of the companies are then listed on recognized stock exchanges in India.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end Assistance section-->


        </div>
        <!-- end page title area -->

       {{-- @include('partials.frontend.client',compact('brand_logo'))--}}
        <!--end about section-->

@endsection