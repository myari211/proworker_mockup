@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <form method="POST" action="/admin/job-roles/roles">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-user input-prefix"></i>
                                    <input type="text" class="form-control" id="job_role" name="job_role_name">
                                    <label for="job_role">Job Role</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-md btn-primary shadow rounded-0 btn-block">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <form method="POST" action="/admin/job-roles/category">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-user input-prefix"></i>
                                    <input type="text" class="form-control" id="category" name="job_categories">
                                    <label for="category">Category</label>
                                </div>
                            </div>  
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-md btn-primary shadow rounded-0 btn-block">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card rounded-0 border-0 shadow mb-4">
                <div class="card-body pb-0">
                    <div class="row d-flex justify-content-end pr-4">
                        <h4>Job R<span class="text-primary">oles</h4>
                    </div>
                    @foreach($role as $data)
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="card shadow border-0 rounded-0">
                                <div class="card-body d-flex align-items-center pb-2">
                                    <h4>{{ $data->job_role_name }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row mt-4 d-flex justify-content-end">
                        {{ $role->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h4>Job Cate<span class="text-primary">gories</span></h4>
                    </div>
                    @foreach($category as $data)
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card rounded-0 border-0 shadow">
                                    <div class="card-body pb-2 d-flex align-items-center">
                                        <h4>{{ $data->job_categories }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row d-flex justify-content-end">
                        {{ $category->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection