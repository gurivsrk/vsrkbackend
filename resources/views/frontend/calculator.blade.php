@extends('layouts.frontend.frontend', ['activeClass' => 'calci','pageType'=>$calci_type])
@section('frontend_content')

<div class="page-title-area bg-white">
    <div class="container">
        <div class="page-title-content">
            <h1>{{str_replace('-',' ',$calci_type)}}</h1>
            <ul>
                <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="item"><a href="javascript:void(0)">Calculator</a></li>
                <li class="item"><a href="javascript:void(0)">{{str_replace('-',' ',$calci_type)}}</a></li>
            </ul>
        </div>
    </div>
    <div class="shape">
        <span class="shape1"></span>
        <span class="shape2"></span>
        <span class="shape3"></span>
        <span class="shape4"></span>
    </div> 

    <!-- start graph section -->
<section class="graph-section ptb-100">
    <div class="container pt-100">
        <div id="">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="sip-calc">
                        <div class="input-group">
                            <div class="get-range-value">
                                <label>Monthly Investment</label>
                                <span class="type-span">₹</span>
                                <input class="type-input" data-id="{{$calci_type}}" id="sipAmt" type="number" maxlength="250"  min="500" max="100000" value="25000">
                            </div>
                            <input class="type-range" type="range" data-id="{{$calci_type}}" min="500" max="100000" step="500" value="25000" style="background-size: 25% 100%;">
                        </div>
                        <div class="input-group mt-5">
                            <div class="get-range-value">
                                <label>Expected return rate (p.a)</label>
                                <input class="type-input" type="number" data-id="{{$calci_type}}" maxlength="250" min="1" max="30" value="12">
                                <span class="type-span">%</span>
                            </div>
                            <input class="type-range" type="range" data-id="{{$calci_type}}" min="1" id="sipRoi"  maxlength="250" max="30" step="0.1" value="12" style="background-size: 38% 100%;">
                        </div>
                        <div class="input-group mt-5">
                            <div class="get-range-value">
                                <label>Time period</label>
                                <input class="type-input" type="number" data-id="{{$calci_type}}"  min="1" max="30" value="10">
                                <span class="type-span">Yr</span>
                            </div>
                            <input class="type-range" type="range" data-id="{{$calci_type}}" min="1" id="sipTime" max="30" step="1" value="10" style="background-size: 30% 100%;">
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5">
                    <div class="input-group mt-1">
                        <div class="get-range-value dynamic-field">
                            <label>Invested Amount:</label>
                            <span id="sipInvestedAmt"></span>
                        </div>
                    </div>
                    <div class="input-group mt-3 dynamic-field">
                        <div class="get-range-value">
                            <label>Estimated Return:</label>
                            <span id="sipEstAmt"></span>
                        </div>
                    </div>
                    <div class="input-group mt-3 dynamic-field">
                        <div class="get-range-value">
                            <label>Total Value:</label>
                            <span id="sipTotalAmt"></span>
                        </div>
                    </div>
                    <div class="cta-btn mt-3">
                        <a href="#" class="btn btn-solid">
                            Invest Now
                        </a>
                    </div>
                </div>
                </div>
                <div class="offset-md-1 col-lg-4">
                    <div id="sipChartCanvas" class="position-relative">
                        <canvas id="sipCalChat" style="width:100%;max-width:350px;max-height:350px"></canvas>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
</div>
<!-- end graph section -->

@include('partials.frontend.client',compact('brand_logo'))

@include('partials.frontend.blog',compact('blogs'))

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/@formulajs/formulajs@3.0.0/lib/browser/formula.min.js"></script>

 <script>
     
    //////////// Slider Change Calue for calculator
    $.getScript('/frontend/js/functions.js',()=>{
        {{$calci_type}}Function(false);
    })
 </script>

@endpush