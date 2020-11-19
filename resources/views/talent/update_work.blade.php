@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h3>Work Experi<span class="text-primary">ence</span></h3>
                    </div>
                    @foreach($work as $data_work)
                    <form method="post" action="/talent/profile/update_work/{{ $data_work->id }}">
                        @csrf
                        <input type="hidden" name="primary" value="{{ Auth::user()->id }}">
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-5">
                                <label for="job_role">Job Role</label>
                                <select name="job_role" class="form-control" id="job_role">
                                    @foreach($role as $data)
                                        <option value="{{ $data->id }}">{{ $data->job_role_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label for="job_category">Job Category</label>
                                <select name="job_category" class="form-control" id="job_category">
                                    @foreach($category as $data)
                                        <option value="{{ $data->id }}">{{ $data->job_categories }}</option>
                                    @endforeach`
                                </select>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-user input-prefix"></i>
                                    <input type="text" name="work_specializations" class="form-control" id="specializations" value="{{ $data_work->work_specialization }}">
                                    <label for="specializations">Specializations</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="md-form input-with-post-icon">
                                            <i class="fas fa-user input-prefix"></i>
                                            <input type="text" name="work_company_name" class="form-control" id="company_name" value="{{ $data_work->work_company_name }}">
                                            <label for="company_name">Company Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="duration">Duration</label>
                                        <select name="work_duration" class="form-control" id="duration">
                                            <option value="0">< 1 Years</option>
                                            <option value="1">1 Years</option>
                                            <option value="2">2 Years</option>
                                            <option value="3">3 Years</option>
                                            <option value="4">4 Years</option>
                                            <option value="5">5 Years</option>
                                            <option value="6">> 5 Years</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form md-outline">
                                    <textarea id="form75" class="md-textarea form-control" rows="3" name="work_description">{{ $data_work->work_description }}</textarea>
                                    <label for="form75">Job Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary btn-md btn-block">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection