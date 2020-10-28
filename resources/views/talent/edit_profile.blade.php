@extends('talent.layouts.app')
@section('content')
    <div class="row mt-5">
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
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Personal Info<span class="text-primary">rmation</span></h3>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                        <label for="first_name">First Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-map-marked-alt input-prefix"></i>
                                        <input type="text" class="form-control" id="address" name="address">
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-birthday-cake input-prefix"></i>
                                        <input type="date" class="form-control" id="birthdate" name="birthdate">
                                        <label for="birthdate">Birth Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-phone input-prefix"></i>
                                        <input type="number" class="form-control" id="telephone" name="telephone">
                                        <label for="telephone">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-2">
                                <div class="col-lg-5">
                                    <label>Gender</label>   
                                    <select name="gender" id="gender" class="form-control" name="gender">
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label>Nationality</label>
                                    <select name="nationality" id="nationality" class="form-control">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body">
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
                                    <button type="button" class="btn btn-primary btn-md rounded-0 border-0 shadow">
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
                                <h3>Work Expe<span class="text-primary">rience</span></h3>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label for="job_role">Job Role</label>
                                    <select name="job_role" class="form-control">
                                        <option value="PM">Project Manager</option>
                                        <option value="EN">Engineer</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label for="job_level">Category</label>
                                    <select name="job_level" class="form-control">
                                        <option value="DCS">DCS</option>
                                        <option value="PPKS">PPKS</option>
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
                            <div class="row d-flex justify-content-end pr-4 pl-4">
                                <div class="col-lg-12 d-flex justify-content-between pr-4">
                                    <button type="button" class="btn btn-sm btn-white border-0 p-2 rounded-circle d-flex align-items-center">
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
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form">
                                        <textarea id="form7" name="education_description" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form7">Description</label>
                                    </div>
                                </div>
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
        </div>
    </div>
@endsection