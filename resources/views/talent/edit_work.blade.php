@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card shadow border-0 rounded-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h3>Summ<span class="text-primary">ary</span></h3>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form input-with-post-icon">
                                <i class="fas fa-user input-prefix"></i>
                                <input type="text" name="summary_name" class="form-control" id="summary_name">
                                <label for="summary_name">Summary Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form md-outline">
                                <textarea id="form75" class="md-textarea form-control" rows="3"></textarea>
                                <label for="form75">Summary Details</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary btn-block btn-md shadow">Save</button>
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
                        <h3>Work Experi<span class="text-primary">ence</span></h3>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-5">
                            <label for="job_role">Job Role</label>
                            <select name="job_role" class="form-control" id="job_role">
                                <option value="">Project Manager</option>
                                <option value="">Engineer</option>
                                <option value="">Technician</option>
                            </select>
                        </div>
                        <div class="col-lg-5">
                            <label for="category">Job Category</label>
                            <select name="job_category" class="form-control" id="job_category">
                                <option value="Automation">Automation</option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form input-with-post-icon">
                                <i class="fas fa-user input-prefix"></i>
                                <input type="text" class="form-control" name="specialization" id="specialization">
                                <label for="specialization">Specialization</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" class="form-control" name="work_experience_company_name">
                                        <label>Company name</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="md-form">
                                        <input type="date" class="form-control" name="work_experience_start_date" id="start_date">
                                        <label for="start_date">Start From</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="md-form">
                                        <input type="date" class="form-control" name="work_experience_end_date" id="end_date">
                                        <label for="end_date">Until</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form md-outline">
                                <textarea id="textarea-char-counter" class="form-control md-textarea" length="120" rows="3"></textarea>
                                <label for="textarea-char-counter">Job Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="button" class="btn btn-outline-primary btn-md btn-block">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-2">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary btn-md btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card rounded-0 border-0 shadow mb-4">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h3>Project Experi<span class="text-primary">ence</span></h3>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-5">
                            <label for="job_role">Job Role</label>
                            <select name="job_role" class="form-control" id="job_role">
                                <option value="">Project Manager</option>
                                <option value="">Engineer</option>
                                <option value="">Technician</option>
                            </select>
                        </div>
                        <div class="col-lg-5">
                            <label for="job_category">Job Category</label>
                            <select name="job_category" class="form-control" id="job_category">
                                <option value="">Automation</option>
                                <option value="">Instrument</option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form input-with-post-icon">
                                <i class="fas fa-user input-prefix"></i>
                                <input type="text" name="specialization" class="form-control" id="specialization">
                                <label for="specialization">Specialization</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="row p-0">
                                <div class="col-lg-8">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" name="company_name" class="form-control" id="company_name">
                                        <label for="company_name">Company Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="md-form">
                                        <input type="date" name="project_experience_start_date" class="form-control" id="project_start_date">
                                        <label for="project_start_date">Start From</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="md-form">
                                        <input type="date" name="project_experience_end_date" class="form-control" id="project_end_date">
                                        <label for="project_end_date">Until</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="button" class="btn btn-outline-primary btn-md btn-block">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row mt-2 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary btn-block btn-md">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection