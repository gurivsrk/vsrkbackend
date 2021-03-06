@extends('layouts.frontend.frontend', ['activeClass' => 'about_us','pageType'=>'our_people'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Expertise: Our People</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">About</a></li>
                        <li class="item"><a href="javascript:void(0)">Our Team</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
            
        <!--start Our People section-->
        <section id="corporate_profile" class="about-section pt-50 bg-white">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-sm-12 pb-30">
                        <div class="section-title">
                            <span class="subtitle">Expertise: Our People</span>
                            <h2>THE PROMOTERS & THEIR WEALTH CREATING TEAM</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end Our People section-->
   </div>
        <!--start team section-->
        <section id="team-member" class="page-section pb-50 bg-white">
            <div class="container">
                @include('partials.frontend.team')
            </div>
        </div>
        </section>
        <!-- end team title area -->

        @include('partials.frontend.app-section')
        {{-- @include('partials.frontend.client',compact('brand_logo'))--}}
       

@endsection