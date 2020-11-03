@extends('admin.layouts.app')
@section('content')
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card rounded-0 border-0 shadow">
            <div class="card-body field">
                <div class="row d-flex justify-content-end pr-4">
                    <h3>Work Expe<span class="text-primary">rience</span></h3>
                </div>
                <div class="row mt-4 d-flex justify-content-center">
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
                <div class="row d-flex justify-content-center" id="after">
                    <div class="col-lg-10">
                        <div class="md-form">
                            <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
                            <label for="form7">Description</label>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end pr-4 pl-4">
                    <div class="col-lg-12 d-flex justify-content-between pr-4">
                        <button type="button" class="btn btn-sm btn-white border-0 p-2 rounded-circle d-flex align-items-center" id="addWork">
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

{{-- <form method="post" action="">
    <div id="member">
        <div class="input">
            <input type="text" name="nama" required placeholder="Nama Lengkap">
        </div>
        <div class="input">
            <input type="text" name="alamat" required placeholder="Alamat">
        </div>
        <div class="input">
            <input type="email" name="email" required placeholder="email">
        </div>
        <div class="input">
            <input type="text" name="no_hp" required placeholder="No Hanphone">
        </div>
    </div>
    <a href="#" class="addMember">(+) Add</a>
    <a href="#" class="deleteMember">(-) Delete</a>
</form> --}}
@endsection