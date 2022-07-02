@extends('layouts.frontend.frontend', ['activeClass' => 'about_us','pageType'=>'corporate'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Corporate Profile</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">About</a></li>
                        <li class="item"><a href="javascript:void(0)">Corporate Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
            
        <!--start corporate section-->
        <section id="corporate_profile" class="about-section ptb-50 bg-white">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12 pb-30">
                        <div class="section-title">
                            <span class="subtitle">Corporate Profile</span>
                            <h2>History</h2>
                        </div>
                        <div class="about-text-blc">
                            <p>VSRK was founded in 2006 and is one of the most respected financial consultants in the industry. We handle mass trading volume and provide vast liquidity to numerous traders worldwide. We believe in taking advanced technology, customized customer service and work diligently hand in hand in order to meet modern traders’ needs in an ever-changing online environment.</p>
                        </div>
                        <div class="row">
                            <h2>Why VSRK?</h2>
                            <ul id="why-vsrk-li" class="vsrk-li">
                              <li>Proprietary, user-friendly trading platforms for web and mobile</li>
                              <li>Over 75 tradable instruments from multiple markets and industries</li>
                              <li>Financial news, daily market analysis and an Economic Calendar</li>
                              <li>Education resources and video tutorials suitable for all levels</li>
                              <li>High leverage and very tight spreads on all tradable instruments</li>
                              <li>Personal assistance with an attentive & updated expert</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 pb-30">
                        <div class="about-img">
                            <img src="{{asset('frontend/img/about/abt_1.png')}}" alt="about-image-1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end corporate section-->

        <!--start Assistance section-->
        <section id="assistance" class="page-section pb-50 assistance-style">
            <div class="new-section-title section-title">
                <h2 class="text-white">Experience Comprehensive Assistance Investing</h2>
            </div>
            <div class="container  pt-50">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                              <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/positive-vote.png')}}" alt="vsrk Service excellence" width="100">
                              </div>
                              <div class="vsrk-right-text">
                                <h4>Service excellence</h4>
                                <p> We urge in continuous updating our online platform and features, our focused concern is bestowing our clients with nothing but the best. We offer our clients personal & attentive account managers and always put our clients first.</p>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                            <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/shield.png')}}" alt="vsrk Prudent risk management"  width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Prudent risk management</h4>
                            <p> Our professional experts assure that neither our clients nor our business are exposed to monetary severance. All set to confront market turbulence without any interference to our services.</p>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/encrypted.png')}}" alt="vsrk Encryption services" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Encryption services</h4>
                            <p> Delicate data is passed through encryption services such as firewalls and Secure Socket Layering.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/exchange-rate.png')}}" alt="vsrk Trade with confidence" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Trade with confidence</h4>
                            <p> VSRK takes many steps to ensure its clients’ security while allowing them to access market opportunities.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/database.png')}}" alt="vsrk Real time margin protection" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Real time margin protection</h4>
                            <p> By using advanced technology and automatic precautions, customers at VSRK have full use of their accounts’ margin, while limits are strictly monitored to prevent negative balance.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/graphic-tool.png')}}" alt="vsrk Advanced tools" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Advanced tools</h4>
                            <p>Automated features and price transparency are our prime rituals, deal in real time account management and reporting with margin analysis, P&L, deal confirmation and market analysis.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/risk.png')}}" alt="vsrk Negative balance protection" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Negative balance protection</h4>
                            <p> The binding policy guarantees that our clients’ accounts can never go into minus and they can’t drain more than their investment even in extreme volatility.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/accounting.png')}}" alt="vsrk Segregated bank accounts" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Segregated bank accounts</h4>
                            <p> All client funds are custodian of leading banks for enhanced protection and are completely separated from company capital.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/seo.png')}}" alt="vsrk VSRK Research" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>VSRK Research</h4>
                            <p> Lumbar abet your stock buying and Mutual Fund investment decisions with our 15 years of unique research advocated by VSRK Research Investment philosophy.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/customer-service.png')}}" alt="vsrk  Round the clock Service" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Multi-Cities & Round the clock Service</h4>
                            <p> Bet on us for all investment needs and requisites. Reach out to us through our online or offline channels for your financial growth.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/cooperation.png')}}" alt="vsrk Relationship Managers" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Relationship Managers</h4>
                            <p> Research, guidance, heedful policing and service to ease you with the time from regular eyeing on your investments.</p>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/best-price.png')}}" alt="vsrk Simplified Pricing" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Simplified Pricing</h4>
                            <p>No two customers' appetite and requirements are the same, hence the prices are tailor-made for every investor’s need.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/product.png')}}" alt="Investment Products" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Wide Potpourri of Investment Products</h4>
                            <p> Armed with a huge range of PMS, AIF, MF products, Stocks (listed & unlisted), Insurance, Corporate Deposits which helps to pick the right product according to investment appetite and trading requirements.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end Assistance section-->

          
        <!--start about section-->
        <section id="about" class="about-section text-justify ptb-70 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                          <div class="section-title">
                              <span class="subtitle">About</span>
                              <h2>VSRK Capital Pvt. Ltd.</h2>
                          </div>
                          <div class="about-text-blc">
                              <p>VSRK Capital Private Limited was incorporated on 8th November 2013 with the name of VSRK Wealth Creator Pvt. Ltd. has been performing its rituals of enhancing the wealth of its huge client base with its expert personnel and knowledge of both traditional and modern Financial Products under Investment Advisory Services to ensure a smooth and amazing satisfaction. </p>
                              <p>Under the guidance of Lt. Shri R.K. Agrawal, who served as the President with utmost responsibility. He boosted the strength & potential of the company by many folds by amalgamating the clients and AUM of M/S Agrawal Investments Consultants. His Vision to build-up a team of exuberant, enterprising and dynamic professionals, certified by the AMFI, NISM and IRDA, working collectively towards a common goal of offering the best for its clients.</p>
                              <p>We are a boutique Company, of independent financial advisers, that offers financial planning and portfolio investment management advice to a variety of clients whether HNIs, Corporate houses or other consulting firms under one umbrella. We stand a class apart known for our dynamic work commitments. We have placed ourselves as the creator and multiplier of proactive investment solutions that adds opulence to the investor’s portfolios. Our aim is to assist in achieving individual and family financial goals. We make use of all updated technology to provide the market information before time to make the right decision at the right time to suit investment needs.</p>
                          </div>
                    </div>
                   <div class="row"> 
                    <div class="col-lg-6 col-sm-12 pb-30">
                        <img src="{{asset('frontend/img/about/unique_seller.png')}}" alt="VSRK Unique Selling Pointers">
                    </div>
                      <div class="col-lg-6 col-sm-12 pb-30">
                            <div class="section-title">
                                <h2>VSRK’s Unique Selling Pointers</h2>
                            </div>
                            <div class="about-text-blc">
                                <p>We create, develop and preserve personal wealth through objective, tailored financial advice. We recognize the unique needs of each client and we take the time to listen and completely understand the issues that are most vital to them.</p>
                            </div>
                          <h4>We re-define ourselves by:</h4>
                          <ul id="why-vsrk-li" class="vsrk-li">
                                <li> ‘Delivering’ more value than asked for, with better understanding of the needs, goals & risk appetites.</li>
                                <li>Flexible and responsive service.</li>
                                <li>Personalized Service to Clients.</li>
                                <li>Real time Portfolio updates and regular investor reports.</li>
                                <li>Comprehensive Investment Solutions.</li>
                                <li>We offer Wealth Management and Financial Planning service to NRI clients as well.</li>
                              </ul>
                              <p>
                                During the 15-year journey since incorporation, Agrawal Investments Consultants was merged with VSRK Wealth Creators in 2013 and now named as “VSRK Capital Pvt. Ltd.”, we have been highly successful in expanding our client base from different walks of life and have stretched AUM from 1700 Crores in 2013 to a sky-touching 3500 Crore. In this pool of total Assets under Management, Rs. 1600 Crores are in Mutual fund schemes, around Rs. 200 Crores in PMS and Rs. 1700 Crores in other assets.
                              </p>
                          </div>
                      </div>
                      <div class="row">
                      <div class="col-lg-6 col-sm-12 pb-30">
                      <div class="section-title">
                                <h2>Awards & Achievements</h2>
                            </div>
                            <div class="about-text-blc">
                                <p>Under the charismatic leadership of R.K. Agarwal, the company has been felicitated with numerous awards. </p>
                                <p>Some of the most prestigious awards for our accomplishments are listed below:</p>
                            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="about-feature-blc">
                                        <i class="envy envy-quality orange"></i>
                                        <div class="about-feature-content">
                                            <p>We were No.1 Pan India in Distribution of UTI Mutual Fund products in IFA Category for the year 2009-2010</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about-feature-blc">
                                        <i class="envy envy-quality orange"></i>
                                        <div class="about-feature-content">
                                            <p>We are the Platinum Club Members (Highest category) in Reliance Mutual fund, UTI Mutual Fund, ICICI Mutual Fund & HSBC Mutual Fund.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about-feature-blc">
                                        <i class="envy envy-quality orange"></i>
                                        <div class="about-feature-content">
                                            <p>We were No. 1 Pan India in IFA Category in HDFC–MIP Long Term Scheme for the year 2009- 2010.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about-feature-blc">
                                        <i class="envy envy-quality orange"></i>
                                        <div class="about-feature-content">
                                            <p>IFA Category WEALTH FORUM Advisor Award – 2010 for Highest Growth in AUM (Equity + Hybrid) – North Zone – Delhi Region.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about-feature-blc">
                                        <i class="envy envy-quality orange"></i>
                                        <div class="about-feature-content">
                                            <p>CNBC Nomination for best IFA Award 2011 IFA Category Wealth Forum Advisor Award 2011 for Net Sales in Equity, Debt, & Hybrid Products Delhi NCR Region. Reliance CEO Club Topper All India 2011. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about-feature-blc">
                                        <i class="envy envy-quality orange"></i>
                                        <div class="about-feature-content">
                                            <p>UTI Mutual Fund Chairman Club Membership since 2008 to till Date.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about-feature-blc">
                                        <i class="envy envy-quality orange"></i>
                                        <div class="about-feature-content">
                                            <p>VSRK has recently been awarded by Blind Wink as ‘The Most Trusted Financial Advisor Pan India’, 2019.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        <div class="col-lg-6 col-sm-12 pb-30">
                        <img src="{{asset('frontend/img/about/achievement.png')}}" alt="VSRK Awards-Achievements">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <!-- end page title area -->

       {{-- @include('partials.frontend.client',compact('brand_logo'))--}}
        <!--end about section-->

@endsection