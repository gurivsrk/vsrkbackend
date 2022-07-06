
@extends('layouts.frontend.frontend', ['activeClass' => 'all_blogs','pageType'=>'all_blogs'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>VSRK Blogs</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="{{ (!empty($pType) && $pType == 'caTag') ? route('frontend.all_blogs') : 'javascript:void(0)'}}">All Blogs</a></li>
                        @if(!empty($pType) && $pType == 'caTag')
                            <li class="item"><a href="javascript:void(0)">{{$type}}</a></li>
                        @endif
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
        <section id="blog" class="blog-section ptb-50 bg-white" style="position: initial;">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-sm-12 pb-30">
                        @include('partials.frontend.blog')
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </section>
        <!--end corporate section-->
   </div>
 

@endsection