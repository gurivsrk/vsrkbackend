@extends('layouts.frontend.frontend', ['activeClass' => 'calci','pageType'=>$calci_type])
@section('frontend_content')

<div class="page-title-area bg-white calculator">
    <div class="container">
        <div class="page-title-content">
            <h1>{{ str_replace('-',' ',$calci_type)}}</h1>
            <ul>
                <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="item"><a href="javascript:void(0)">Calculators</a></li>
                <li class="item"><a href="javascript:void(0)">{{ str_replace('-',' ',$calci_type)}}</a></li>
            </ul>
        </div>
    </div>
    <div class="shape">
        <span class="shape1"></span>
        <span class="shape2"></span>
        <span class="shape3"></span>
        <span class="shape4"></span>
    </div> 
    
    <section class="graph-section ptb-100">
        <div class="container pt-100">
            <div id="calC">
                @include('partials.frontend.calculator',['calc_type'=>$page_content->calc_type, 'content'=>$page_content])
            </div>
        </div>
    </section>
    {{--- {!!@$page_content->calculator!!} --}}

    {{-- @include('partials.frontend.client',compact('brand_logo'))--}}

@include('partials.frontend.blog',compact('blogs'))

@endsection

