@extends('testing.layouts.app')
@section('content')
    <div class="row m-0">
        <div class="col-lg-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-dark z-depth-0" style="position:absolute; width:100%">
                <div class="collapse navbar-collapse d-flex justify-content-between" id="basicExampleNav">
                    <img src="{{ asset('img/logopro2.png') }}">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="#">Find Jobs</a>
                        </li>
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <div class="row pr-4 d-flex align-items-center">
                        <i class="fas fa-bell mr-3 text-white"></i>
                        <small class="mr-5 text-white">{{ Auth::user()->user_first_name }} {{ Auth::user()->user_last_name}}</small>
                        <a data-toggle="modal" data-target="#account">
                            <div class="view overlay rounded-circle">
                                @if(Auth::user()->avatar == null)
                                    <img src="{{ asset('img/avatar-default.png') }}" style="width:40px;" class="img-fluid rounded-circle" data-toggle="modal" data-target="#account">
                                @else
                                    <img src="{{ asset('img/'. Auth::user()->avatar) }}" data-toggle="modal" data-target="#account">
                                @endif
                                <div class="mask flex-center rgba-white-strong">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="row d-flex justify-content-between">
                <img src="{{ asset('img/banner.png') }}" style="width:100%; height:300px;">
                <img src="{{ asset('img/avatar-default.png') }}" style="width:250px; position:absolute; margin-top:150px;" class="rounded-circle shadow ml-5">
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-end pr-4" style="margin-top:-40px;">
        <div class="col-lg-9">
            <ul class="nav nav-tabs d-flex justify-content-end navbar-light" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                        Profile
                        <i class="fas fa-user ml-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        Jobs
                        <i class="fas fa-briefcase ml-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        Setting
                        <i class="fas fa-cogs ml-2"></i>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active mt-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-11 d-flex justify-content-end">
                                        <ul class="nav" role="tablist">
                                            <li role="presentation" class="active"><a href="#summary" role="tab" class="btn btn-sm btn-primary" data-toggle="tab">Summary</a></li>
                                            <li role="presentation"><a href="#personal" class="btn btn-primary btn-sm" role="tab" data-toggle="tab">Personal</a></li>
                                            <li role="presentation"><a href="#education" class="btn btn-primary btn-sm" role="tab" data-toggle="tab">Education</a></li>
                                            <li role="presentation"><a href="#experience" class="btn btn-primary btn-sm" role="tab" data-toggle="tab">Experiences</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="tab-content" id="myTabContent" style="width:100%">
                                        <div class="tab-pane fade show active" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                                            @if($summary_count < 1)
                                                <form method="post" action="/talent/profile/summary/{{ Auth::user()->id }}">
                                                    @csrf
                                                    <div class="row mt-4 d-flex justify-content-center">
                                                        <div class="col-lg-11">
                                                            <h3>User Sum<span class="text-primary">mary</span></h3>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5 d-flex justify-content-center">
                                                        <div class="col-lg-11">
                                                            <div class="md-form md-outline input-with-pre-icon">
                                                                <i class="fas fa-user-tie input-prefix"></i>
                                                                <input type="text" class="form-control" id="summary" name="summary_name">
                                                                <label>Summary</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-11">
                                                            <div class="md-form">
                                                                <textarea id="textarea" class="form-control md-textarea" rows="3" name="summary_details"></textarea>
                                                                <label for="textarea-char-counter">Summary Details</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-11 d-flex justify-content-end p-0">
                                                            <button type="submit" class="btn btn-primary btn-sm rounded-0">
                                                                <i class="fas fa-paper-plane" style="font-size:15px;"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @else
                                                <div class="row mt-4 d-flex justify-content-center">
                                                    <div class="col-lg-11">
                                                        <h3>User Sum<span class="text-primary">mary</span></h3>
                                                    </div>
                                                </div>
                                                @foreach($summary as $data)
                                                <div class="row mt-4 d-flex justify-content-center">
                                                    <div class="col-lg-11">
                                                        <small class="text-muted">Summary Name</small>
                                                        <h5>{{ $data->summary_name }}</h5>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 d-flex justify-content-center">
                                                    <div class="col-lg-11">
                                                        <small class="text-muted">Summary Details</small>
                                                        <h5>{{ $data->summary_details }}</h5>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                            <div class="row d-flex justify-content-center mt-4">
                                                <div class="col-lg-11">
                                                    <h3>Personal Informa<span class="text-primary">tion</span>
                                                </div>
                                            </div>
                                            <div class="row mt-5 d-flex justify-content-center">
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label>First Name</label>
                                                            <h4>{{ Auth::user()->user_first_name }}</h4>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Last Name</label>
                                                            <h4>{{ Auth::user()->user_last_name }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if(Auth::user()->user_phone == null)
                                                <form method="post" action="/talent/profile/{{ Auth::user()->id }}">
                                                    @csrf
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="md-form md-outline">
                                                                        <input type="number" name="user_phone" class="form-control" id="phone">
                                                                        <label for="phone">Phone</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="md-form md-outline">
                                                                        <input type="date" name="user_birthday" class="form-control" id="birthday">
                                                                        <label for="birthday">Birth date</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label>Gender</label>
                                                                    <select name="user_gender" class="form-control" id="gender">
                                                                        <option value="female">Female</option>
                                                                        <option value="male">Male</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>Nationality</label>
                                                                    <select name="user_nationality" class="form-control" id="nationality">
                                                                        <option value="indonesia">Indonesia</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4 d-flex justify-content-center">
                                                        <div class="col-lg-11 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary btn-sm">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @else
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-lg-11">
                                                        <div class="row mt-2">
                                                            <div class="col-lg-6">
                                                                <label>Phone</label>
                                                                <h4>{{ Auth::user()->user_phone }}
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>Birth Date</label>
                                                                <h4>{{ Auth::user()->user_birthday }}</h4>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-6">
                                                                <label>Gender</label>
                                                                <h4>{{ ucwords(Auth::user()->user_gender) }}</h4>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>Nationality</label>
                                                                <h4>{{ ucwords(Auth::user()->user_nationality) }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="contac-tab">
                                            <div class="row d-flex justify-content-center mt-4">
                                                <div class="col-lg-11">
                                                    <h3>Educa<span class="text-primary">tion</span></h3>
                                                </div>
                                            </div>
                                            @if($education_count < 1)
                                                <form method="post" action="/talent/education/{{ Auth::user()->id }}">
                                                    @csrf
                                                    <div class="row d-flex justify-content-center mt-4">
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label>Degree</label>
                                                                    <select name="education_degree" class="form-control">
                                                                        <option value="senior_high_school/vocational">Senior High School/Vocational</option>
                                                                        <option value="diploma">Diploma</option>
                                                                        <option value="bachelor">Bachelor</option>
                                                                        <option value="master">Master</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 pt-3">
                                                                    <div class="md-form md-outline mt-3">
                                                                        <input type="text" name="education_institute_name" class="form-control" id="institute">
                                                                        <label for="institute">Institute/University</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="md-form md-outline">
                                                                        <input type="text" name="education_field_of_study" class="form-control" id="field_of_study">
                                                                        <label for="field_of_study">Field Of Study</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="md-form md-outline">
                                                                        <input type="date" name="education_start_date" class="form-control" id="start">
                                                                        <label for="start">Start From</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="md-form md-outline">
                                                                        <input type="date" name="education_end_date" class="form-control" id="end">
                                                                        <label for="end">Until</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row d-flex justify-content-center">
                                                                <div class="col-lg-12">
                                                                    <div class="md-form md-outline">
                                                                        <textarea id="textarea" class="form-control md-textarea" rows="3" name="education_details" id="details"></textarea>
                                                                        <label for="details">Details</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4 d-flex justify-content-end">
                                                                <button type="submit" class="btn btn-primary btn-sm">
                                                                    <i class="fas fa-paper-plane"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @else
                                                @foreach($education as $data)
                                                    <div class="row mt-4 d-flex justify-content-center">
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label>Institute/University</label>
                                                                    <h4>{{ $data->education_institute_name }}</h4>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-lg-6">
                                                                    <label>Education Degree</label>
                                                                    <h4>{{ ucwords($data->education_degree) }}</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>Field Study</label>
                                                                    <h4>{{ ucwords($data->education_field_of_study) }}</h4>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-lg-6">
                                                                    <label>Start Date</label>
                                                                    <h4>{{ $data->education_start_date }}</h4>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>End Date</label>
                                                                    <h4>{{ $data->education_end_date }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="summary-tab">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-11">
                                                    <div class="row mt-4">
                                                        <h3>Work Experie<span class="text-primary">nces</span>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-6">
                                                            <select name="job_role_id" class="form-control">
                                                                @foreach($job_role as $data)
                                                                    <option value="{{ $data->id }}">{{ $data->job_role_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <select name="work_specialization" class="form-control">
                                                                @foreach($category as $data)
                                                                    <option value="{{ $data->id }}">{{ $data->job_categories }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-12">
                                                            <div class="md-form md-outline">
                                                                <input type="text" name="work_specialization" class="form-control" id="special">
                                                                <label for="special">Specialization</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="md-form md-outline">
                                                                <input type="text" name="work_company_name" class="form-control" id="company">
                                                                <label for="Company">Company</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="md-form md-outline">
                                                                <input type="date" name="work_start_date" class="form-control" id="start_date">
                                                                <label for="start_date">Start From</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="md-form md-outline">
                                                                <input type="date" name="work_end_date" class="form-control" id="end_date">
                                                                <label for="end_date">Until</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="md-form md-outline">
                                                                <textarea id="textarea" class="form-control md-textarea" rows="3" name="work_description" id="description"></textarea>
                                                                <label for="description">Description</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row d-flex justify-content-center mt-4">
                                                <div class="col-lg-11 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <span class="fas fa-paper-plane"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                        wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                        lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                        locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
                        squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                        etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
                        stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
                </div>
            </div>
        </div>
    </div>
@endsection

