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
                        @foreach($summaries as $data)
                            <div class="row d-flex justify-content-between align-items-center pl-1 pr-4">
                                <a class="fas fa-edit text-muted" style="opacity:0.5; margin-top:-40px;" href="/talent/profile/edit_summary/{{ $data->id }}"></a>
                                <h3>User Summ<span class="text-primary">ary</span></h3>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row">
                                        <h5>{{ $data->summary_name }}</h5>
                                    </div>
                                    <div class="row">
                                        <p>{{ $data->summary_details }}</p>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    @if($work_count < 1)
                        <div class="row d-flex justify-content-between pr-4 pl-3">
                            <button type="button" class="btn btn-primary add-more">
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
                                                <label for="duration">Duration</label>
                                                <select name="work_duration[]" class="form-control" id="duration">
                                                    <option value="0">< 1 Year</option>
                                                    <option value="1">1 Year</option>
                                                    <option value="2">2 years</option>
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
                                            <textarea id="form75" class="md-textarea form-control" rows="3" name="work_description"></textarea>
                                            <label for="form75">Job Description</label>
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
                    @else
                        <div class="row d-flex justify-content-end pr-4">
                            <h3>Work Experi<span class="text-primary">ence</span></h3>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                @foreach($work as $data)
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>            
                                        <div class="row">
                                            <h4>{{ $data->work_specialization }} {{ $data->job_role_name }}</h4>
                                        </div>
                                        <div class="row">
                                            <h5 class="text-muted">{{ $data->work_company_name}}</h5>
                                        </div>
                                        <div class="row">
                                            <p>{{ $data->job_categories }}</p>
                                        </div>
                                        <div class="row mb-4">
                                            <span class="badge badge-primary p-2 rounded-0 border-0 shadow">{{ $data->work_duration }} Years</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <a class="fas fa-edit text-muted" style="opacity:0.5" href="/talent/profile/edit_work/{{ $data->primary }}"></a>
                                        </div>
                                        <div class="row mt-2">
                                            <a class="fas fa-trash text-muted" style="opacity:0.5" data-toggle="modal" data-target="#deleteWork{{ $data->primary }}"></a>
                                        </div>        
                                    </div>
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
            <div class="card rounded-0 border-0 shadow mb-4">
                <div class="card-body">
                    <div class="row d-flex justify-content-between pl-3 pr-4">
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </button>
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
                                    <label for="work_duration">Duration</label>
                                    <select name="work_duration" class="form-control" id="work_duration">
                                        <option value="0">< 1 Year</option>
                                        <option value="1">1 Year</option>
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
                    <input type="text" name="work_specializations[]" class="form-control" id="specialization_copy">
                    <label for="specializations_copy">Specializations</label>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="md-form input-with-post-icon">
                            <i class="fas fa-user input-prefix"></i>
                            <input type="text" name="work_company_name[]" class="form-control" id="work_company_name_copy">
                            <label for="work_company_name_copy">Company Name</label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="duration">Duration</label>
                            <select name="work_duration[]" class="form-control" id="duration">
                            <option value="0">< 1 Year</option>
                            <option value="1">1 Year</option>
                            <option value="2">2 years</option>
                            <option value="3">3 Years</option>
                            <option value="4">4 Years</option>
                            <option value="5">5 Years</option>
                            <option value="6">> 6 Years</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal --}}

@foreach($work as $data)
<div class="modal fade" id="deleteWork{{ $data->primary }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12  d-flex justify-content-between">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete This ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <label>Company</label>
                        <h5>{{ $data->work_company_name }}</h5>
                    </div>
                    <div class="col-lg-6">
                        <label>Category</label>
                        <h5>{{ $data->job_categories }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Specialization</label>
                        <h5>{{ $data->work_specialization }}</h5>
                    </div>
                    <div class="col-lg-6">
                        <label>Role</label>
                        <h5>{{ $data->work_specialization}} {{ $data->job_role_name }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label>Duration</label>
                        <h5>{{ $data->work_duration }} Years</label>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-lg-12">
                        <form method="post" action="/talent/profile/delete_work/{{ $data->primary }}" id="delete_work">
                            @csrf
                            <input type="hidden" name="primary" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-danger btn-md btn-block border-0 shadow d-flex justify-content-between">
                                Delete
                                <span class="fas fa-trash"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection