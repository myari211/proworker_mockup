@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0 rounded-0">
                <div class="card-body">
                    @if($summaries_count < 1)
                    <div class="row d-flex justify-content-between end">
                        <h3>Summ<span class="text-primary">ary</span></h3>
                    </div>
                    <form method="post" action="/talent/profile/work/summary/{{ Auth::user()->id }}">
                        @csrf
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
                                    <textarea id="form75" class="md-textarea form-control" rows="3" name="summary_details"></textarea>
                                    <label for="form75">Summary Details</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary btn-block btn-md shadow">Save</button>
                            </div>
                        </div>
                    </form>
                    @else
                        <div class="row d-flex justify-content-end pr-4">
                            <h3>User Summ<span class="text-primary">ary</span></h3>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                @foreach($summaries as $data)
                                    <div class="row">
                                        <h5>{{ $data->summary_name }}</h5>
                                    </div>
                                    <div class="row">
                                        <p>{{ $data->summary_details }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-between pr-4">
                        <button type="button" class="btn btn-primary rounded-circle add-more">
                            <i class="fas fa-plus"></i>
                        </button>
                        <h3>Work Experi<span class="text-primary">ence</span>
                    </div>
                    <form method="post" action="/talent/profile/work/input/{{ Auth::user()->id }}">
                        @csrf
                        <div class="control-group after-add-more mb-4">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label for="job_role">Job Role</label>
                                    <select name="job_role[]" class="form-control" id="job_role">
                                        @foreach($role as $data)
                                            <option value="{{ $data->id }}">{{ $data->job_role_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label for="job_category">Job Category</label>
                                    <select name="job_category[]" class="form-control" id="job_category">
                                        @foreach($category as $data)
                                            <option value="{{ $data->id }}">{{ $data->job_categories }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" name="work_specializations[]" class="form-control" id="specialization">
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
                                                <input type="text" name="work_company_name[]" class="form-control" id="work_company_name">
                                                <label for="work_company_name">Company Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-user input-prefix"></i>
                                                <input type="number" class="form-control" id="duration" name="work_duration[]">
                                                <label for="duration">Duration</label>
                                            </div>
                                        </div>
                                    </div>
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
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
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
                                    <div class="col-lg-4">
                                        <div class="md-form input-with-post-icon">
                                            <i class="fas fa-user input-prefix"></i>
                                            <input type="text" name="work_duration[]" class="form-control" id="work_duration">
                                            <label for="work_duration">Duration</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="button" class="btn btn-outline-primary btn-md btn-block add-more">
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

<div class="copy invisible">
    <div class="control-group">
        <div class="row d-flex justify-content-end pr-5 mt-4">
                <a class="fas fa-close remove"></a>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <label for="job_role">Job Role</label>
                <select name="job_role[]" class="form-control" id="job_role">
                    @foreach($role as $data)
                        <option value="{{ $data->id }}">{{ $data->job_role_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-5">
                <label for="job_category">Job Category</label>
                <select name="job_category[]" class="form-control" id="job_category">
                    @foreach($category as $data)
                        <option value="{{ $data->id }}">{{ $data->job_categories }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="md-form input-with-post-icon">
                    <i class="fas fa-user input-prefix"></i>
                    <input type="text" name="work_specializations[]" class="form-control" id="specialization">
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
                            <input type="text" name="work_company_name[]" class="form-control" id="work_company_name">
                            <label for="work_company_name">Company Name</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="md-form input-with-post-icon">
                            <i class="fas fa-user input-prefix"></i>
                            <input type="text" name="work_duration[]" class="form-control" id="work_duration">
                            <label for="work_duration">Duration</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection