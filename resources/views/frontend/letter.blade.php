@extends('layouts.frontend.frontend', ['activeClass' => 'about_us','pageType'=>'letter'])
@section('frontend_content')
   <!-- start page title area-->
   <section class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Letter to Investor</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">About</a></li>
                        <li class="item"><a href="javascript:void(0)">Letter to Investor</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
             <!--start Investors section-->
        <div id="letter" class="about-section pt-50 bg-white text-justify">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-sm-12 pb-30">
                        <div class="section-title">
                            <h2>To <br>Our Valued Investors:</h2>
                        </div>
                        <div class="about-text-blc">
                            <p>It goes without saying that these are extraordinary times. even as our hearts venture out to everyone suffering from COVID-19, we are enormously grateful to our first responders and medical professionals who are risking their lives on a daily basis to stay us safe. they're truth heroes of this crisis, and their intrepid actions are a concept to us all.</p>
                            <p>Over the course of the last 6 years, VSRK has built a resilient business that helps our customers power their mission-critical research and development engines. And as even the foremost basic products become more complicated, engineering simulation becomes an indispensable during the event process.</p>
                            <p>If there's one key risk to look at out for in 2022 in our view, investors would act to brace for heightened volatility. The unusually low volatility of the past few quarters has been underpinned by an ultra-accommodative policy backdrop. Liquidity normalization from current levels may be a near certainty and may cause a rise in volatility. Liquidity normalization should also mean a challenging environment for speculative names as earnings growth becomes the dominant driver of returns.</p>
                            <p>Overall, we are likely at the cusp of a revival within the economic cycle. a mix of normalizing profit to GDP and normalizing economic process could imply strong earnings growth for the following few years after sub-par earnings growth of the past decade and more. Valuations look stretched on price to earnings multiples. Further, with normalization on monetary policy front, valuations might even see some rerating. </p>
                            <p>However, within the context of a probable high growth period ahead for earnings and still modest bond yields on a relative basis, equities should have upsides left. Yet in our view the 000 opportunity is beyond headline indexes and in market internals. While last decade has been about deflationary assets doing well amidst the backdrop of low economic process globally, low inflation and near zero interest rates in many parts of the globe, the subsequent few years could look very different with growth, inflation and rates looking up. Pro-economy and pro-inflation assets should be favorably placed in such an environment.</p>
                            <p>All new and existing investors should work on the pointers said ahead.</p>
                            <p>The first rule of an investment is don’t lose money. and also the second rule of an investment is don’t forget the primary rule. VSRK focuses on companies that are ready to do something their competitors can’t copy, and in industries they understand, to form very handsome returns within the long-run. Play with Margin of Safety. We don’t use leverage in investing. it's crazy to borrow money on securities.</p>
                            <p>Second, never wrestle with a pig because if you are doing you’ll both get dirty, but the pig will enjoy it. Engage with high-quality people. Spend time with folks that are better than you, because sooner or later, we add the direction of our company. Ask yourself whether the people you engage with are helping to form you a more robust person, or are dragging you down.</p>
                            <p>Third, one should deal business with trustworthy people. VSRKs specialized team helps you lead a happier life by saving from headaches. We allow you to focus more on areas within which you'll add value. We work on your funds and facilitate to find your passion.</p>
                            <p>Fourth, the magic of interest. The commitment and consistency required for mastery are going to be lots easier to attain if you enjoy the method. Spend but you create should be the motto which is able to begin to amount to something. plenty of individuals are in a very position where they might increase their savings amount without a comprehensible decline in their quality of life.</p>
                            <p>Fifth, be Open-minded to the intense, we at VSRK fundamentally has alternate investment approaches. The Circle of Competence is important for any investor, what an investor needs is that the ability to properly evaluate selected businesses. Another aspect of it will be understanding your own strengths and weaknesses, and playing to them. In economics, this can be called comparative advantage.</p>
                            <p>Sixth, it's said that wise people read lots. Articles & Blogs by VSRK content strategist helps the investors not only earn but learn much about market and spell success. devour readings which will be excellent introductions to a subject and yield a more thorough understanding.</p>
                            <p>Last but not the smallest amount, have strong values like integrity, intelligence, and energy. And if you don’t have the primary, the opposite two will kill you Any investor don’t have lots of envy or resentment. Stay cheerful in spite of your troubles. of these simple rules work so well to create your life better and that they are so trite.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end Investors section-->
        </section>
        <!-- end page title area -->

       
      
        @include('partials.frontend.client',compact('brand_logo'))
       
@endsection