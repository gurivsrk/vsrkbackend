
@extends('layouts.frontend.frontend', ['activeClass' => 'blog','pageType'=>'blog'])
@section('meta_data')
<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{$blog->title}}" />
	<meta property="og:description" content="{{Str::limit($blog->descritption,100) }}" />
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
       <section class="blog-details-section ptb-100 bg-thin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="image">
                                <img src="{{asset($blog->blogImage)}}" alt="image" />
                            </div>
                            <ul class="post-meta">
                                <li><i class="envy envy-calendar"></i><a href="#">{{$blog->BlogDate}}</a></li>
                            </ul>
                            <div class="content">
                                <h1 class="blog_title_vsrk">{{$blog->title}}</h1>
                                {!! $blog->descritption !!}
                            </div>
                           
                            <div class="article-share">
                                <div class="tags pb-3">
                                    <span>tags:</span>
                                    <a href="#">Design</a>
                                    <a href="#">Development</a>
                                    <a href="#">Technique</a>
                                </div>
                                <div class="social-link">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" class="bg-tertiary" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text={{$blog->title}}+{{$blog->shareTags}}+&url={{url()->current()}}%2F%3Fheader_preset%3D-1" class="bg-info" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&title={{$blog->title}}+{{$blog->shareTags}}" class="bg-info" target="_blank"><i class="fab fa-linkedin-in"></i></a> 
                                </div>
                            </div>
                            <hr />
                            <div class="related-post ptb-30">
                                <h2>related post</h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-item-single">
                                            <div class="blog-item-img">
                                                <a href="blog-details.html">
                                                    <img src="assets/img/blog/blog_3.png" alt="blog-bg-image" />
                                                </a>
                                                <p class="tag">Design</p>
                                            </div>
                                            <div class="blog-item-content">
                                                <span> <i class="envy envy-calendar"></i>May 31, 2021 </span>
                                                <a href="blog-details.html">
                                                    <h3>The great moment journey in our business</h3>
                                                </a>
                                                <p>
                                                    Ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur laborum nulla, minus commodi blanditiis rem explicabo.
                                                </p>
                                                <a href="blog-details.html" target="_self" class="btn btn-text-only">
                                                    read more
                                                    <i class="envy envy-right-arrow"></i>
                                                </a>
                                            </div>
                                            <!-- blog-item-content -->
                                        </div>
                                        <!-- blog-item-single -->
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-item-single">
                                            <div class="blog-item-img">
                                                <a href="blog-details.html">
                                                    <img src="assets/img/blog/blog_2.png" alt="blog-bg-image" />
                                                </a>
                                                <p class="tag">Brand</p>
                                            </div>
                                            <div class="blog-item-content">
                                                <span> <i class="envy envy-calendar"></i>March 31, 2021 </span>
                                                <a href="blog-details.html">
                                                    <h3>The State of Local SEO Industry Report 2021</h3>
                                                </a>
                                                <p>
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni laborum minima enim ab! Asperiores, quos!
                                                </p>
                                                <a href="blog-details.html" target="_self" class="btn btn-text-only">
                                                    read more
                                                    <i class="envy envy-right-arrow"></i>
                                                </a>
                                            </div>
                                            <!-- blog-item-content -->
                                        </div>
                                        <!-- blog-item-single -->
                                    </div>
                                </div>
                            </div>
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
                                <article class="article-item">
                                    <a href="#" class="article-img">
                                        <img src="assets/img/blog/recent_article_1.png" alt="blog-image" />
                                    </a>
                                    <div class="info">
                                        <span class="time"><i class="envy envy-calendar"></i>Sepetember 31, 2021</span>
                                        <h6 class="title">
                                            <a href="#">The Biggest Mistake When Setting New Goals. </a>
                                        </h6>
                                    </div>
                                </article>

                                <article class="article-item">
                                    <a href="#" class="article-img">
                                        <img src="assets/img/blog/recent_article_2.png" alt="blog-image" />
                                    </a>
                                    <div class="info">
                                        <span class="time"><i class="envy envy-calendar"></i>Sepetember 31, 2021</span>
                                        <h6 class="title">
                                            <a href="#">The Biggest Mistake When Setting New Goals. </a>
                                        </h6>
                                    </div>
                                </article>

                                <article class="article-item">
                                    <a href="#" class="article-img">
                                        <img src="assets/img/blog/recent_article_3.png" alt="blog-image" />
                                    </a>
                                    <div class="info">
                                        <span class="time"><i class="envy envy-calendar"></i>Sepetember 31, 2021</span>
                                        <h6 class="title">
                                            <a href="#">The Biggest Mistake When Setting New Goals. </a>
                                        </h6>
                                    </div>
                                </article>
                            </section>
                            <section class="widget widget-categories">
                                <h5 class="widget-title">Categories</h5>
                                <ul class="categorie-list">
                                    <li>
                                        <a href="#">Design</a>
                                        <span class="total">17</span>
                                    </li>
                                    <li>
                                        <a href="#">Development</a>
                                        <span class="total">34</span>
                                    </li>
                                    <li>
                                        <a href="#">Innovation</a>
                                        <span class="total">10</span>
                                    </li>
                                    <li>
                                        <a href="#">research</a>
                                        <span class="total">35</span>
                                    </li>
                                </ul>
                            </section>

                            <section class="widget widget-gallery">
                                <h5 class="widget-title">gallery</h5>
                                <div class="gallery-item">
                                    <img src="assets/img/blog/blog_3.png" alt="blog-image" />
                                    <img src="assets/img/blog/blog_7.png" alt="blog-image" />
                                    <img src="assets/img/blog/blog_8.png" alt="blog-image" />
                                    <img src="assets/img/blog/blog_6.png" alt="blog-image" />
                                    <img src="assets/img/blog/blog_4.png" alt="blog-image" />
                                    <img src="assets/img/blog/blog_5.png" alt="blog-image" />
                                </div>
                            </section>

                            <section class="widget widget-tag">
                                <h5 class="widget-title">Tags</h5>
                                <div class="tags">
                                    <a href="#"> Desing </a>
                                    <a href="#"> development </a>
                                    <a href="#"> Technique </a>
                                    <a href="#"> trendy </a>
                                    <a href="#"> art </a>
                                    <a href="#"> deployment </a>
                                    <a href="#"> Technical </a>
                                    <a href="#"> Technology </a>
                                    <a href="#"> apps </a>
                                    <a href="#"> mobile </a>
                                    <a href="#"> start up </a>
                                    <a href="#"> UI/UX </a>
                                    <a href="#"> tips </a>
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