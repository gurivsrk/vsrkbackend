  <!--start blog section-->

        <div class="row justify-content-center">
            @if(!empty($blogs))
                @foreach($blogs as $blog)
                <div class="{{empty($class) ? 'col-lg-4' : $class}} col-md-6 col-sm-12">
                    <div class="blog-item-single">
                        <div class="blog-item-img">
                            <a href="{{route('frontend.blog_detail',[$blog->id,$blog->slug])}}">
                                <img src="{{!empty($blog->blogImage)?(($blog->blogImage != 'no-media') ? asset($blog->blogImage): asset('frontend/img/blog_template.jpg') ) : asset('frontend/img/blog_template.jpg') }} " alt="{{$blog->slug}}-image" />
                            </a>
                            <p class="tag">{{$blog->tagName[0]}}</p>
                        </div>
                        <div class="blog-item-content">
                            <span> <i class="envy envy-calendar"></i>{{$blog->BlogDate}}</span>
                            <a href="{{route('frontend.blog_detail',[$blog->id,$blog->slug])}}">
                                <h3>{!!(Str::length($blog->title) < 40 ? wordwrap($blog->title, 30 , "<br>" ,true) : $blog->title)!!}</h3>
                            </a>
                            @if(empty($class))
                            <p>
                                {!! Str::limit($blog->descritption,185) !!}
                            </p>
                            <a href="{{route('frontend.blog_detail',[$blog->id,$blog->slug])}}" target="_self" class="btn btn-text-only">
                                read more
                                <i class="envy envy-right-arrow"></i>
                            </a>
                            @endif
                        </div>
                        <!-- blog-item-content -->
                    </div>
                    <!-- blog-item-single -->
                </div>
            @endforeach
            @endif
        </div>
        <!-- row -->
