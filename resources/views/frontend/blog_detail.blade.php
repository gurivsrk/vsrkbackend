
@extends('layouts.frontend.frontend', ['activeClass' => 'blog','pageType'=>'blog'])
@section('meta_data')
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$blog->title}}" />
<meta property="og:description" content="{!!Str::limit(strip_tags($blog->descritption),150) !!}" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:site_name" content="VSRK CAPITAL PVT. LTD." />
<meta property="article:publisher" content="https://www.facebook.com/vsrk.capital" />
<meta property="article:published_time" content="{{ $blog->created_at }}" />
<meta property="og:image" content="{{asset($blog->blogImage)}}" />
<meta property="og:image:width" content="2500" />
<meta property="og:image:height" content="1347" />
<meta property="og:image:type" content="image/jpeg" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:creator" content="@vsrkcapital" />
<meta name="twitter:site" content="@vsrkcapital" />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="vsrk" />
<meta name="twitter:label2" content="Est. reading time" />
<meta name="twitter:data2" content="2 minutes" />
@endsection
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h2 class="header_title">Blog</h2>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="{{route('frontend.all_blogs')}}">All Blogs</a></li>
                        <li class="item"><a href="javascript:void(0)">Blog Detail</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
            
       <!-- Start Blog Details section -->
       <section class="blog-details-section pt-150 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="image">
                                <img src="{{asset($blog->blogImage)}}" alt="{{$blog->slug}}-image" />
                            </div>
                            <ul class="post-meta">
                                <li><i class="envy envy-calendar"></i>{{$blog->BlogDate}}</li>
                            </ul>
                            <div class="content">
                                <h1 class="blog_title_vsrk">{{$blog->title}}</h1>
                                {!! $blog->descritption !!}
                            </div>
                           
                            <div class="article-share-vsrk">
                                <div class="tags pb-3">
                                    <span>tags:</span>
                                    @foreach($blog->tagName as $tName)
                                        <a href="#">{{$tName}}</a>
                                    @endforeach 
                                </div>
                                <div class="social-link">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" class="bg-tertiary" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text={{$blog->title}}+{{$blog->shareTags}}+&url={{url()->current()}}%2F%3Fheader_preset%3D-1" class="bg-info" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&title={{$blog->title}}+{{$blog->shareTags}}" class="bg-info" target="_blank"><i class="fab fa-linkedin-in"></i></a> 
                                </div>
                            </div>
                            <hr />
                            @if(!empty($blogs))
                                <div class="related-post ptb-30">
                                    <h2>related post</h2>
                                    @include('partials.frontend.blog',['class'=>'col-lg-6'])
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <div class="widget widget-search">
                                <form class="search-form search-top">
                                    <input type="search" class="search-field" placeholder="Search article" />
                                    <button type="submit" class="btn-text-only">
                                        <i class="envy envy-magnify-glass"></i>
                                    </button>
                                </form>
                            </div>
                            <section class="widget widget-article">
                                <h5 class="widget-title">Recent articles</h5>
                                @foreach($latestBlogs as $lBlog)
                                <article class="article-item">
                                    <a href="{{route('frontend.blog_detail',[$lBlog->id,$lBlog->slug])}}" class="article-img">
                                        <img src="{{asset($lBlog->blogImage)}}" width="200px" alt="{{$lBlog->slug}}-image" />
                                    </a>
                                    <div class="info">
                                        <span class="time"><i class="envy envy-calendar"></i>{{$lBlog->BlogDate}}</span>
                                        <h6 class="title">
                                            <a href="{{route('frontend.blog_detail',[$lBlog->id,$lBlog->slug])}}">{{$lBlog->title}}</a>
                                        </h6>
                                    </div>
                                </article>
                                @endforeach
                            </section>
                            <section class="widget widget-categories">
                                <h5 class="widget-title">Categories</h5>
                                <ul class="categorie-list">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->name}}</a>
                                            <span class="total">{{ $catCount[$category->id] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                            <section class="widget widget-tag">
                                <h5 class="widget-title">Tags</h5>
                                <div class="tags">
                                    @foreach($tags as $t)
                                        <a href="#"> {{$t->name}} </a>
                                    @endforeach
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
   </div>
 

@endsection