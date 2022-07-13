@extends('layouts.frontend.frontend', ['activeClass' => 'kyc_update','pageType'=>'kyc update'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Kyc Update</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">Kyc Update</a></li>
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
        <section id="kyc_update" class="about-section pt-50 bg-white">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-xl-12 pb-30">
                        <div class="about-text-blc text-justify">
                            <p>In order to comply with regulatory provisions under the Prevention of Money Laundering Act 2002, issued by SEBI/ Govt. of India, KYC/ AADHAAR / FATCA formalities are required to be completed for all Unit Holders, including Guardians and Power of Attorney holders, for any investment in mutual funds.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end Investments section-->
          

         <!--start Benefits section-->
         <section id="kyc_ways" class="page-section pb-50 bg-white gallery-section">
            <div class="container">
                <div class="gallery-slider owl-carousel">
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4>Check your KYC Status</h4>
                            <ul>
                                <li><a href="https://www.cvlkra.com/kycpaninquiry.aspx" target="_blank">CVL KRA</a></li>
                                <li><a href="https://camskra.com/" target="_blank">CAMS KRA</a></li>
                                <li><a href="https://kra.ndml.in/" target="_blank">NSDL KRA</a></li>
                                <li><a href="NSE KRA" target="_blank">NSE KRA</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4>Download CKYC Forms</h4>
                            <ul>
                                <li><a href="http://www.investwell.in/updation/parameter/ckyc/CKYC-KRA-KYC-Individuals.pdf" target="_blank">CKYC Individual Form</a></li>
                                <li><a href="http://www.investwell.in/updation/parameter/ckyc/kyc-ind-change-new.pdf" target="_blank">KYC Individual Change Form</a></li>
                                <li><a href="http://www.investwell.in/updation/parameter/ckyc/Supplementary-CKYC-Application-Form.pdf" target="_blank">Supplementary CKYC Form [For upgrade from KYC to CKYC]</a></li>
                                <li><a href="http://www.investwell.in/updation/parameter/ckyc/KYC-NonIndividual-new.pdf" target="_blank">KYC Non Individual Form</a></li>
                                <li><a href="http://www.investwell.in/updation/parameter/ckyc/KYC-Nonind-change-new.pdf" target="_blank">KYC Non-Individual Change Form</a></li>
                                <li><a href="http://www.investwell.in/updation/parameter/ckyc/KYC-NonIndividual-Annexure-new.pdf" target="_blank">KYC Non Individual-Annexure</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-image"> 
                            <h4> Check CKYC Status </h4>
                            <ul>
                                <li><a href="https://www.karvykra.com/upansearchglobalwithpanexempt.aspx" target="_blank">Karvy KRA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end gallery section -->
        <!--end Benefits section-->
        </div>
        <!-- end page title area -->
        {{-- @include('partials.frontend.client',compact('brand_logo'))--}}
        <!--end about section-->

@endsection