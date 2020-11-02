@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/registration.png') }}" class="profile rounded-circle border">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body">
                            @if($count_profile !== 0)
                                @foreach($profile as $data)
                                    <div class="row d-flex justify-content-end pr-4">
                                        <h3>Personal Inform<span class="text-primary">ation</span></h3>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <h5 class="d-flex align-items-center">
                                                <i class="fas fa-user"></i>&nbsp;
                                                {{ $data->user_first_name }} {{ $data->user_last_name }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-envelope"></i>
                                                {{ Auth::user()->email }}
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-phone"></i>
                                                0{{ $data->user_telephone }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-map-marked-alt"></i>
                                                {{ $data->user_address }}
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-birthday-cake"></i>
                                                {{ $data->user_birth_date }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                @if($data->user_gender === 'female')
                                                    <i class="fas fa-mars"></i>
                                                    Female
                                                @else
                                                    <i class="fas fa-venus"></i>
                                                    Male
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-flag"></i>
                                                {{ $data->user_nationality }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <form method="POST" action="/talent/profile/personal_information/{{ Auth::user()->id}}">
                                    @csrf
                                    <div class="row d-flex justify-content-end pr-4">
                                        <h3>Personal Info<span class="text-primary">rmation</span></h3>
                                    </div>
                                    <div class="row mt-4 d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-user input-prefix"></i>
                                                <input type="text" class="form-control" id="first_name" name="user_first_name">
                                                <label for="first_name">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-user input-prefix"></i>
                                                <input type="text" class="form-control" id="last_name" name="user_last_name">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-map-marked-alt input-prefix"></i>
                                                <input type="text" class="form-control" id="address" name="user_address">
                                                <label for="address">Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <input type="date" class="form-control" id="birthdate" name="user_birth_date">
                                                <label for="birthdate">Birth Date</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-phone input-prefix"></i>
                                                <input type="number" class="form-control" id="telephone" name="user_telephone">
                                                <label for="telephone">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center mt-2">
                                        <div class="col-lg-5">
                                            <label>Gender</label>   
                                            <select name="user_gender" id="gender" class="form-control">
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Nationality</label>
                                            <select name="user_nationality" id="nationality" class="form-control">
                                                <option value="Indonesia">Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-4 d-flex justify-content-end pr-4">
                                        <div class="col-md-4 d-flex justify-content-end pr-4">
                                            <button type="submit" class="btn btn-md rounded-0 shadow btn-primary shadow">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body">
                            @if($count_summary === 0)
                                <form method="POST" action="/talent/profile/summaries/{{ Auth::user()->id }}">
                                    @csrf
                                    <div class="row d-flex justify-content-end pr-4">
                                        <h3>Summ<span class="text-primary">ary</span></h3>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-briefcase input-prefix"></i>
                                                <input type="text" name="summary_name" id="summary_name" class="form-control">
                                                <label for="summary">Summary Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-building input-prefix"></i>
                                                <input type="text" name="summary_details" id="summary_details" class="form-control">
                                                <label for="summary_details">Summary Details</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4 d-flex justify-content-end pr-4">
                                        <div class="col-lg-4 d-flex justify-content-end pr-4">
                                            <button type="submit" class="btn btn-primary btn-md rounded-0 border-0 shadow">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                @foreach($summary as $data)
                                    <div class="row d-flex justify-content-end pr-4">
                                        <h3>Sum<span class="text-primary">mary</span></h3>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <h4>{{ $data->summary_name }}</h4>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            @if($data->summary_details === null)
                                                <p>No Details</p>
                                            @else
                                                <p>{{ $data->summary_details }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body">
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Work Expe<span class="text-primary">rience</span></h3>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center field-group">
                                <div class="col-lg-5">
                                    <label for="job_role">Job Role</label>
                                    <select name="job_role" class="form-control">
                                        @foreach($role as $data)
                                            <option value="{{ $data->id }}">{{ $data->job_role_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label for="job_level">Category</label>
                                    <select name="job_level" class="form-control">
                                        @foreach($category as $data)
                                            <option value="{{ $data->id }}">{{ $data->job_categories }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form">
                                        <input type="text" name="job_specialization" class="form-control" id="job_specialization">
                                        <label for="job_specialization">Job Specialization</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-building input-prefix"></i>
                                        <input type="text" name="work_experience_company_name" class="form-control" id="work_experience_company_name">
                                        <label for="work_experience_company_name">Company Name</label>
                                    </div>  
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="md-form">
                                        <input type="date" name="work_experience_start_date" class="form-control">
                                        <label>Start From</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="md-form">
                                        <input type="date" name="work_experience_end_date" class="form-control">
                                        <label>Until</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form">
                                        <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form7">Description</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row field-group-copy" style="display:none">
                                <p>Tes</p>
                            </div>

                            <div class="row d-flex justify-content-end pr-4 pl-4">
                                <div class="col-lg-12 d-flex justify-content-between pr-4">
                                    <button type="button" class="btn btn-sm btn-white border-0 p-2 rounded-circle d-flex align-items-center addMore" onclick="javascript:void(0);">
                                        <i class="material-icons text-primary">add</i>
                                    </button>
                                    <button type="submit" class="btn btn-md btn-primary rounded-0 border-0 pl-4">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body">
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Project Expe<span class="text-primary">rience</span></h3>
                            </div>
                            <div class="row d-flex justify-content-end pr-4">
                                <small class="text-muted">Freelance</small>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label for="job_role">Job Role</label>
                                    <select name="job_role" class="form-control" id="job_role">
                                        <option value="">Project Manager</option>
                                        <option value="">Enginerr</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label for="category">Category</label>
                                    <select name="project_category" class="form-control">
                                        <option value="">DCS</option>
                                        <option value="">SIS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form">
                                        <input type="text" name="project_specialization" class="form-control" id="specialization">
                                        <label for="specialization">Specialization</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-building input-prefix"></i>
                                        <input type="text" name="company_name" id="company_name" class="form-control">
                                        <label for="company_name">Company Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="md-form">
                                        <input type="date" name="project_start_date" class="form-control">
                                        <label for="project_start_date">Start From</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="md-form">
                                        <input type="date" name="project_end_date" class="form-control">
                                        <label for="project_end_date">Until</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center   ">
                                <div class="col-lg-10">
                                    <div class="md-form">
                                        <textarea id="form7" name="education_description" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form7">Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end pr-5">
                                <button type="submit" class="btn btn-primary rounded-0 shadow border-0 btn-md">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card rounded-0 shadow border-0">
                        <div class="card-body">
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Educa<span class="text-primary">tion</span></h3>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-school input-prefix"></i>
                                        <input type="text" class="form-control" name="instititute_name">
                                        <label>Insititute</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-graduation-cap input-prefix"></i>
                                        <input type="text" name="field_of_study" class="form-control" id="field_of_study">
                                        <label for="field_of_study">Field Of Study</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-4">
                                <label>Degree</label>
                                    <select name="education_degree" class="form-control">
                                        <option value="elementary_school">Elementary School</option>
                                        <option value="junior_high_school">Junior High School</option>
                                        <option value="senior_high_school/vocational">Senior/Vocational High School</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <div class="md-form">
                                        <input type="date" name="education_start_date" class="form-control">
                                        <label for="education_start_date">Start From</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="md-form">
                                        <input type="date" name="education_end_date" class="form-control">
                                        <label for="education_end_date">Until</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form">
                                        <textarea id="form7" name="education_description" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form7">Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end pr-3">
                                <div class="col-lg-4 d-flex justify-content-end pr-3">
                                    <button type="submit" class="btn btn-primary rounded-0 border-0 btn-md">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card shadow border-0 rounded-0 mb-4">
                        <div class="card-body">
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Skil<span class="text-primary">ls</span></h3>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user-tie input-prefix"></i>
                                        <input type="text" class="form-control" id="skill" name="skill">
                                        <label for="skill">Skill</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="level">Level</label>
                                    <select name="skill_level" class="form-control" id="level">
                                        <option value="">Beginer</option>
                                        <option value="">Intermediate</option>
                                        <option value="">Advance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between pr-5 pl-5">
                                <button type="button" class="btn btn-white text-primary rounded-circle p-2 d-flex align-items-center" onclick="add()">
                                    <i class="material-icons">add</i>
                                </button>
                                <button type="submit" class="btn btn-md btn-primary rounded-0 border-0 shadow">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection