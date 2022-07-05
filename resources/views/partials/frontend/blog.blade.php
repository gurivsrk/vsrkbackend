  <!--start blog section-->

        <div class="row justify-content-center">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-item-single">
                    <div class="blog-item-img">
                        <a href="{{route('frontend.blog_detail',[$blog->id,$blog->slug])}}">
                            <img src="{{asset($blog->blogImage)}}" alt="blog-bg-image" />
                        </a>
                        <p class="tag">{{json_decode($blog->tags)[0]}}</p>
                    </div>
                    <div class="blog-item-content">
                        <span> <i class="envy envy-calendar"></i>{{$blog->BlogDate}}</span>
                        <a href="{{route('frontend.blog_detail',[$blog->id,$blog->slug])}}">
                            <h3>{!!(Str::length($blog->title) < 40 ? wordwrap($blog->title, 30 , "<br>" ,true) : $blog->title)!!}</h3>
                        </a>
                        <p>
                            {!! Str::limit($blog->descritption,200) !!}
                        </p>
                        <a href="{{route('frontend.blog_detail',[$blog->id,$blog->slug])}}" target="_self" class="btn btn-text-only">
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
