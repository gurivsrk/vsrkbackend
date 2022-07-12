@extends('layouts.frontend.frontend', ['activeClass' => 'about_us','pageType'=>'career'])
@section('frontend_content')
   <!-- start page title area-->
   <div class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>Career</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">About</a></li>
                        <li class="item"><a href="javascript:void(0)">Career</a></li>
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
        <section id="career" class="about-section ptb-50 bg-white text-justify">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="section-title">
                        <span class="subtitle">Career</span>
                        <h2>Life at VSRK</h2>
                    </div>
                    <div class="about-text-blc">
                        <p>Our business has been built on our core principle of putting our clients' interests first. To accomplish this, we foster an inclusive culture where our people are driven to perform and operate with the highest integrity and values. As soon as you start working at Nippon India, you'll learn what's expected of you and what you need to do to achieve results. You'll be able to access a wide variety of resources, receive support to help you succeed, and much more. At Nippon India, we encourage our employees to walk the path of continuous learning and development and enable them attain higher expertise levels by providing financial assistance for pursuing relevant / professional courses.​</p>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                              <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/learning.png')}}" alt="vsrk learning" width="100">
                              </div>
                              <div class="vsrk-right-text">
                                <h4>Incredible Learning</h4>
                                <p> Help clients by creating wealth for them through comprehensive investment management based on knowledge, expertise, technology and processes.</p>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                            <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/value-respect.png')}}" alt="vsrk learning"  width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Values & Respect</h4>
                            <p> We have an open office with a collaborative environment and encourage learning and sharing of ideas. All of us work together with a common goal of creating value for our clients. We earn our respect for the work that we do. </p>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/infrastructure-location.png')}}" alt="vsrk infrastructure location" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Fantastic infrastructure and Location</h4>
                            <p> We are at the hub of some of the fastest growing companies in India @ East Delhi. We use top of the line hardware and software to ensure you can do your work well. We have created great office infrastructure and are walking distance from the metro station. </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="faq-item">
                        <div class="vsrk-left-img">
                                <img src="{{asset('frontend/img/about/exchange-rate.png')}}" alt="vsrk Trade with confidence" width="100">
                              </div>
                        <div class="vsrk-right-text">
                            <h4>Fast Growth</h4>
                            <p>We are amongst the fastest growing FinTech companies in the industry with a 100% growth trajectory since inception. As a new age business, you get to learn and grow at a faster pace as well and truly build out a fantastic career for yourself.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end Assistance section-->

          
        <!--start about section-->
        <section id="why-choose-us" class="ptb-70 bg-white text-justify">
            <div class="row align-items-center">
                <div class="new-section-title section-title">
                    <h2 class="text-white">16+ years of experience in wealth creation</h2>
                </div>
            </div>
            <div class="container pt-50">
                <div class="row align-items-center">
                      <div class="col-lg-6 col-sm-12 pb-30">
                            <h2 class="h2-heading mb-2">Why chose Us</h2>
                            <div class="about-text-blc">
                                <p>Here is your path to achieve your best! At VSRK, one gets a platform to bring out the best in you, experience moments of optimism and happiness, create value and make a difference! Become a part of our vibrant team which believes in stepping up and going the extra mile. </p>
                                <p>At VSRK, we believe in growth beyond expectations. Significant elements that define our work culture are global exposure to the right talent, cross-domain experience, and work-life balance. We emphasize intense training and development programs which facilitate on-the-job learning.</p>
                                <p>VSRK is an organization where people from diverse backgrounds and geographies come together to attain a common vision. We have a diverse and talented crew with a culture that promotes individual excellence and teamwork, along with an unwavering focus on serving our clients' best interests.</p>
                            </div>
                            <h4>Talent Management</h4>
                            <ul id="talent-management" class="vsrk-li">
                                <li>More than 50% of employees have 5+ years of experience. </li>
                                <li>More than 10% of employees have 10+ years of experience.</li>
                                <li>40% of employees are home grown leaders.</li>
                                <li>30+ specialized personnel.</li>
                                <li>85+ years of combined leadership experience.</li>
                                <li>Average age: 30 years- A young & dynamic team of Experts</li>
                              </ul>
                          </div>
                        <div class="col-lg-6 col-sm-12 pb-30">
                        <img src="{{asset('frontend/img/about/achievement.png')}}" alt="VSRK Awards-Achievements">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="jobs" class="bg-white about-section pb-100">
            <div class="container">
                <div class="section-title mb-4">
                    <h2>New Openings</h2>
                </div>
                    @foreach($category as $cat)
                        @php $count = 0 ; @endphp
                    <div class="row job-box">
                        @foreach($vacany as $job)
                            @if($cat->id == $job->category_id)
                                @if($count == 0)
                                    <div class="job-title">
                                        <h3>{{$job->cateName->name}}</h3>
                                        <div class="job-role-count">
                                            <span></span> Open Roles
                                        </div>
                                    </div>
                                @endif
                                    <div class="jobs mt-3 col-xl-6">
                                        <div class="faq-item d-block">
                                            <h4>{{$job->vacany_name}}</h4>
                                            <div class="text-justify job-description-short">
                                                {!! Str::limit($job->descritption, 41) !!}
                                            </div>
                                            <div class="text-justify job-description">
                                                {!!$job->descritption!!}
                                            </div>
                                        </div>
                                    </div>
                            @php ++$count; @endphp
                        @endif
                    @endforeach
                    </div>
                @endforeach
            
        </div>
    </section>
    <section class="contact-section ptb-100 bg-thin">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{asset('frontend/img/about/join-us.png')}}"  alt="vsrk-join-us">
                    </div>
                    <div class="col-md-7 col-sm-12 ">
                        <h4>Please post us with your resume so that as and when we find a fitting opportunity, we will contact you.</h4>
                       {{-- <form id="jobPost" novalidate="true"> --}}
                       <form  action="{{route('frontend.form_process')}}" method="post" enctype="multipart/form-data"> 
                        @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select name="job_type" class="form-control" id="job_type" required="" data-error="Please select any one" >
                                            <option hidden value=""> Applying for</option>
                                        @foreach($vacany as $v)
                                            <option value="{{$v->vacany_name}}">{{$v->vacany_name}}</option>
                                        @endforeach    
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select name="gender" class="form-control" id="gender" required="" data-error="Please select your gender" >
                                            <option value="" hidden>Your Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Others</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="dob" class="form-control" id="dob" required="" data-error="Please enter your DOB" placeholder="dd-mm-yyyy">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required="" data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="tel" name="contact" class="form-control" id="contact" pattern="[0-9]{4}[0-9]{4}[0-9]{2}" required="" data-error="Please enter correct contact number" placeholder="Contact Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="designation" class="form-control" id="designation" placeholder="Current Designation">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="work_experience" class="form-control" id="work_experience" placeholder="Total Work Experience">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="current_employer" class="form-control" id="current_employer" placeholder="Current Employer">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="current_ctc" class="form-control" id="work_experience" placeholder="Current CTC per annum">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input type="file" name="cv" class="form-control" accept="application/msword, .docx, application/pdf" required="" data-error="Please upload CV with proper file extension">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-4">
                                    <button type="submit" class="btn btn-solid disabled" style="pointer-events: all; cursor: pointer;">send message</button>
                                    <div id="msgSubmit" class="h5 text-center hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </section>
    </div>
    <!-- end page title area -->

        {{-- @include('partials.frontend.client',compact('brand_logo')) --}}
        <!--end about section-->

@endsection