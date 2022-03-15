  <!--start blog section-->
  <section id="blog" class="blog-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">our blog</span>
            <h2>Our Latest Article To Help You</h2>
            <p>Does any industry face a more complex audience journey and marketing sales process than B2B technology? Does any industry faces a more complex audience.</p>
        </div>
        <div class="row justify-content-center">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-item-single">
                    <div class="blog-item-img">
                        <a href="blog-details.html">
                            <img src="{{asset($blog->blogImage)}}" alt="blog-bg-image" />
                        </a>
                        <p class="tag">{{json_decode($blog->tags)[0]}}</p>
                    </div>
                    <div class="blog-item-content">
                        <span> <i class="envy envy-calendar"></i>{{$blog->BlogDate}}</span>
                        <a href="blog-details.html">
                            <h3>{!!(Str::length($blog->title) < 40 ? wordwrap($blog->title, 30 , "<br>" ,true) : $blog->title)!!}</h3>
                        </a>
                        <p>
                            {!! Str::limit($blog->descritption,200) !!}
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
        @endforeach
        </div>
        <!-- row -->
    </div>
</section>
<!--end blog section-->