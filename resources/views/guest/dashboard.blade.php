@extends('guest.layouts.app')
@section('content')

<div class="slider_area">
    <div class="single_slider d-flex align-items-center" style="background-image: url({{ asset('/img/guest/banner/banner.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="slider_text">
                        <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">4536+ Jobs listed</h5>
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">The Platform For You</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Welcome to Proworker Curating Talent Across The Globe</p>
                        <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            <a href="#" class="boxed-btn3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
        <img src="{{ asset('img/guest/banner/illus3.png') }}" alt="">
    </div>
</div>
<!-- slider_area_end -->

<!-- catagory_area -->
<div class="catagory_area">
    <div class="container">
        <div class="row cat_search">
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <input type="text" placeholder="Search keyword">
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <select class="wide" >
                        <option data-display="Location">Location</option>
                        <option value="1">Singapore</option>
                        <option value="2">Malaysia</option>
                        <option value="4">Indonesia</option>
                        <option value="4">Indonesia</option>
                      </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single_input">
                    <select class="wide">
                        <option data-display="Category">Category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="4">Category 3</option>
                      </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="job_btn">
                    <a href="#" class="boxed-btn3">Find Job</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_search d-flex align-items-center">
                    <span>Popular Search:</span>
                    <ul>
                        <button type="button" class="btn btn-outline-primary">Network</button>
                        <button type="button" class="btn btn-outline-primary">System Engineer</button>
                        <button type="button" class="btn btn-outline-primary"> DCS Engineer</button>
                        <button type="button" class="btn btn-outline-primary"> Instrument Engineer</button>
                        <button type="button" class="btn btn-outline-primary"> Mechanical Engineer</button>
                        <button type="button" class="btn btn-outline-primary"> Electrical Engineer</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ catagory_area -->

<!-- popular_catagory_area_start  -->
<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Popular Categories</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($special as $data)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <div class="pl-2">
                            <div class="row">
                                <h4 class="text-primary">{{ $data->specialization_name }}</h4>
                            </div>
                            <div class="row">
                                <h5 class="text-muted">{{ $data->job_categories }}</h5>
                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-blue-grey btn-lg">50</button>
                            </div>
                        </div>
                        <div>
                            @if($data->image != null)
                                <img src="{{ asset('img/image_web/'.$data->image) }}" style="width:100px; height:100px;">
                            @else
                                <img src="{{ asset('img/avatar-default.png') }}" style="width:100px; height:100px;">    
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- popular_catagory_area_end  -->

<!-- job_listing_area_start  -->
<div class="job_listing_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Job Listing</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="brouse_job text-right">
                    <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                </div>
            </div>
        </div>
        <div class="job_lists">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/koper.png" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="job_details.html"><h4>Electrical Engineer</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i> South Korea</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> Temporary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                             <img src="img/koper.png" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="job_details.html"><h4>Drafter</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i> Australia</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> Temporary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                               <img src="img/koper.png" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="job_details.html"><h4>DCS Engineer</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i>Temporary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                              <img src="img/koper.png" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="job_details.html"><h4>SPI Engineer</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i> German, Europe</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> Temporary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/koper.png" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="job_details.html"><h4>Mechanical Engineer</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i> Thailand </p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/koper.png" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="job_details.html"><h4>Network Engineer</h4></a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i> Bangladesh, India</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end  -->
 <!-- list_company_area_start  -->
<div class="featured_candidates_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-60">
                    <h3>Our Partners</h3>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="candidate_active owl-carousel">
                        <div class="thumb">
                        <div class="col-xs-6 col-md-12">
                            <img src="img/logo pertamina.png" alt="">
                        </div>
                    </div>
                        <div class="thumb">
                        <div class="col-xs-6 col-md-12">
                            <img src="img/logo honeywell.png" alt="">
                        </div>
                    </div>
                        <div class="thumb">
                        <div class="col-xs-6 col-md-12">
                            <img src="img/logo medco energi.png" alt="">
                        </div>
                    </div>
                        <div class="thumb">
                        <div class="col-xs-6 col-md-12">
                            <img src="img/logo gmi.png" alt="">
                        </div>
                    </div>
                     <div class="thumb">
                        <div class="col-xs-6 col-md-12">
                            <img src="img/logo yokogawa.png" alt="">
                        </div>
                    </div>
                        <div class="thumb">
                        <div class="col-xs-6 col-md-12">
                            <img src="img/logo schneider.png" alt="">
                        </div>
                    </div>
                    <div class="thumb">
                        <div class="col-xs-6 col-md-12">
                    <img src="img/logo eni.png" alt="">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- list_company_area_end  -->

<!-- job_searcing_wrap  -->
<div class="job_searcing_wrap overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Looking for a Job?</h3>
                    <p>Bridge You with Company </p>
                    <a href="#" class="boxed-btn3">Browse Job</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="searching_text">
                    <h3>Looking for a Worker?</h3>
                    <p>Finding a Profesional Worker </p>
                    <a href="#" class="boxed-btn3">Post a Job</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection