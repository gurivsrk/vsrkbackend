@extends('layouts.frontend.frontend', ['activeClass' => 'investment','pageType'=>'insurance'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Mutual Funds Investments</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">Investment Solutions</a></li>
                        <li class="item"><a href="javascript:void(0)">Insurance</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
            
        <!--start Investments section-->
        <section id="mutual_funds" class="about-section ptb-50 bg-white">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-xl-6 pb-30">
                        <div class="section-title">
                            <span class="subtitle">Insurance</span>
                            <h2>Life Insurance</h2>
                        </div>
                        <div class="about-text-blc text-justify">
                            <p>As at every life stage, everyone has a set of primary needs that requires sufficient funds to fulfill them. This is where life insurance comes into the picture- as it offers tailor made products to cover every aspect at different stages of life. There is no doubt that life insurance is a must have for everyone. Hence it's very crucial to have a complete understanding of the value a life insurance policy can bring into your life and that of your loved ones. A life insurance policy is actually a contract with an insurance company. A lump sum amount is provided, in exchange for premium payments, known as the death benefits, to the nominees or beneficiaries upon the death of the insurer. While choosing a life insurance, the advisor will help you to map its needs & goals. This will help you pick out the options that suit you the best.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 pb-30">
                        <!-- <div class="about-img">
                            <img src="{{asset('frontend/img/about/abt_1.png')}}" alt="about-image-1">
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--end Investments section-->
          
        <!--start Schemes section-->
        <section id="Schemes" class="page-section ptb-50 bg-thin">
            <div class="new-section-title section-title ">
                <h2 class="text-white">Schemes according to Investment Objective</h2>
            </div>
            <div class="container">
                <div class="row align-items-center pt-50">
                    <div class="col-md-12">
                          <div class="about-text-blc">
                              <p>A scheme can also be classified as a growth scheme, income scheme or balanced scheme considering its investment objective. Such schemes may be open-ended or close-ended, schemes as described earlier. Such schemes may be classified mainly as follows:</p>
                          </div>
                    </div>
                   <div class="row justify-content-center"> 
                        <div class="col-lg-6 col-sm-12 alternate-image-section">
                            <img src="{{asset('frontend/img/investment/Growth-Equity.png')}}" alt="VSRK Growth/Equity Oriented">
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-text-section">
                            <div class="alternate-content">
                                <h4> Growth/Equity Oriented Scheme</h4>
                                <p>The aim of growth funds is to provide capital appreciation over the medium to long- term. Such schemes normally invest a major part of their corpus in equities. Such funds have comparatively high risks. These schemes provide different options to the investors like dividend option, growth, etc. and the investors may choose an option depending on their preferences. The investors must indicate the option in the application form. The mutual funds also allow the investors to change the options at a later date. Growth schemes are good for investors having a long-term outlook seeking appreciation over a period of time.</p> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-text-section">
                            <div class="alternate-content">
                                <h4> Income/Debt Oriented Scheme</h4>
                                <p>The aim of income funds is to provide regular and steady income to investors. Such schemes generally invest in fixed income securities such as bonds, corporate debentures, Government securities and money market instruments. Such funds are less risky compared to equity schemes. </p> 
                                <p>However, opportunities of capital appreciation are also limited in such funds. The NAVs of such funds are affected because of change in interest rates in the country. If the interest rates fall, NAVs of such funds are likely to increase in the short run and vice versa. However, long term investors may not bother about these fluctuations.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-image-section">
                            <img src="{{asset('frontend/img/investment/income.png')}}" alt="VSRK Income/Debt Oriented">
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-image-section">
                            <img src="{{asset('frontend/img/investment/balance.png')}}" alt="VSRK Balanced/Hybrid Scheme">
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-text-section">
                            <div class="alternate-content">
                                <h4> Balanced/Hybrid Scheme</h4>
                                <p>The aim of balanced schemes is to provide both growth and regular income as such schemes invest both in equities and fixed income securities in the proportion indicated in their offer documents. These are appropriate for investors looking for moderate growth. They generally invest 40-60% in equity and debt instruments. These funds are also affected because of fluctuations in share prices in the stock markets. However, NAVs of such funds are likely to be less volatile compared to pure equity funds.</p> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-text-section">
                            <div class="alternate-content">
                                <h4> Money Market or Liquid Schemes</h4>
                                <p>These schemes are also income schemes and their aim is to provide easy liquidity, preservation of capital and moderate income. These schemes invest exclusively in short-term instruments such as treasury bills, certificates of deposit, commercial paper and inter-bank call money, government securities, etc. Returns on these schemes fluctuate much less compared with other funds. These funds are appropriate for corporate and individual investors as a means to park their surplus funds for short periods.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-image-section">
                            <img src="{{asset('frontend/img/investment/moeny-market.png')}}" alt="VSRK Money Market or Liquid">
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-image-section">
                            <img src="{{asset('frontend/img/investment/gilt-funds.png')}}"  alt="VSRK Gilt Funds">
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-text-section">
                            <div class="alternate-content">
                                <h4> Gilt Funds</h4>
                                <p>These funds invest exclusively in government securities. Government securities have no default risk. NAVs of these schemes also fluctuate due to change in interest rates and other economic factors as is the case with income or debt oriented schemes.</p> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-text-section">
                            <div class="alternate-content">
                                <h4> Index Funds</h4>
                                <p>Index Funds replicate the portfolio of a particular index such as the BSE Sensitive index (Sensex), NSE 50 index (Nifty), etc. These schemes invest in the securities in the same weightage comprising an index. NAVs of such schemes would rise or fall in accordance with the rise or fall in the index, though not exactly by the same percentage due to some factors known as “tracking error” in technical terms. Necessary disclosures in this regard are made in the offer document of the mutual fund scheme.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 alternate-image-section">
                            <img src="{{asset('frontend/img/investment/index-funds.png')}}" height="80%" alt="VSRK Index Funds">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>

         <!--start Benefits section-->
         <section id="assistance" class="page-section ptb-50 bg-white gallery-section">
            <div class="new-section-title section-title">
                <h2 class="text-white">Benefits of Investing in Best Mutual funds in India</h2>
            </div>
            <div class="container  pt-50">
                <h3>There are many reasons to invest in Mutual funds Online with the top mutual fund distributor in India. Some of them are mentioned below:</h3>
                <div class="gallery-slider owl-carousel pt-50">
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4>Professional Financial Experts</h4>
                            <p> As the best mutual fund distributor company in Delhi we would like to highlight the point that every Mutual fund scheme has a well-defined objective and behind every scheme, there is a dedicated team of financial experts working in tandem with a specialized investment research team. These experts diligently and judiciously study companies, their products and performance, and after thorough analysis, they decide on the best investment option most aptly suited to achieve the scheme’s objective as well as investor’s financial goals.</p>
                        </div>
                        <div class="gallery-content">
                            <h3 class="text-white">Mutual Fund Services</h3>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4>Diversifying Risk</h4>
                            <p> Diversification of Risk plays a very big part in the success of any portfolio. The top mutual fund distributor in Delhi always prefers investment in a broad range of securities. This limits the investment risk by reducing the effect of a possible decline in the value of any one security. Mutual fund unit-holders can benefit from diversification techniques usually available only to investors wealthy enough to buy significant positions in a wide variety of securities.</p>
                        </div>
                        <div class="gallery-content">
                        <h3 class="text-white"> Online Mutual Fund Services</h3>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4> Low Cost </h4>
                            <p> Today the investment in online mutual funds has become very cheap and highly accessible by people of all income groups. Nowadays, Mutual funds generally provide an opportunity to invest with fewer funds as compared to other avenues in the capital market. You can invest in a mutual fund with as little as Rs. 5,000 and also have the option to invest in SIP mutual funds or commonly known as Systematic Investment Plan starting with just Rs.500 every month.</p>
                        </div>
                        <div class="gallery-content">
                        <h3 class="text-white">Online Mutual Fund Plans</h3>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4>Liquidity</h4>
                            <p> As one of the fastest growing mutual fund distributors in Delhi we have seen that people are often afraid to invest in SIP mutual funds as they assume that once they invest in SIP mutual funds their money will be locked in for years but this is not true.</p>
                            <p>You can encash your money from a mutual fund rather easily on an immediate basis when compared with other forms of savings like the public provident fund or National Savings Scheme. You can withdraw or redeem money at the Net Asset Value related prices in the open-end schemes. However, please note that in closed-end schemes, the lock-in period is mentioned, investors cannot redeem their investment until that period.</p>
                        </div>
                        <div class="gallery-content">
                        <h3 class="text-white">Liquidity</h3>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4> Variety of Investment </h4>
                            <p> There is no shortage of variety when investing in mutual funds. There are funds that focus on blue-chip stocks, technology stocks, bonds or a mix of stocks and bonds and with due assistance from a financial expert, the investor can choose a scheme that aptly fits his requirements, and helps him achieve maximum profitability.</p>
                        </div>
                        <div class="gallery-content">
                            <h3 class="text-white">Mutual Funds Online</h3>
                        </div>
                    </div>
                   

                </div>
            </div>
        </section>
        <!-- end gallery section -->
        <!--end Benefits section-->
        </div>
        <!-- end page title area -->

        @include('partials.frontend.app-section',compact('brand_logo'))
        <!--end about section-->

@endsection