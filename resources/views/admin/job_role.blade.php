@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-4">
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
        <div class="col-lg-4">
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
        <div class="col-lg-4">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <form method="post" action="/admin/specializations">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                @if($category_count < 1)
                                    <div class="row mt-5 pl-3">
                                        <p class="text-danger">Insert Category First</p>
                                    </div>
                                @else
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category_name" id="category">
                                        @foreach($category_all as $data)
                                            <option value="{{ $data->id }}">{{ $data->job_categories}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-user input-prefix"></i>
                                    <input type="text" class="form-control" name="specialization_name" id="special">
                                    <label for="special">
                                        <small>Specializations</small>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary border-0 shadow btn-block btn-md rounded-0">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card rounded-0 border-0 shadow mb-4">
                <div class="card-body pb-0">
                    <div class="row d-flex justify-content-end pr-4">
                        <h4>Job R<span class="text-primary">oles</h4>
                    </div>
                    @foreach($role as $data)
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <div class="card shadow border-0 rounded-0">
                                <div class="card-body d-flex align-items-center justify-content-between pb-2 pr-0">
                                    <h4>{{ $data->job_role_name }}</h4>
                                    <div>
                                        <button type="button" class="btn btn-warning btn-sm p-2 rounded-circle mr-0" data-toggle="modal" data-target="#roles{{ $data->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm p-2 rounded-circle ml-0">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
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
        <div class="col-lg-4">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h4>Job Cate<span class="text-primary">gories</span></h4>
                    </div>
                    @foreach($category as $data)
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="card rounded-0 border-0 shadow">
                                    <div class="card-body pb-2 pr-0 d-flex align-items-center justify-content-between">
                                        <h4>{{ $data->job_categories }}</h4>
                                        <div>
                                            <button type="button" class="btn btn-sm btn-warning p-2 rounded-circle mr-0">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger p-2 rounded-circle ml-0">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
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
        <div class="col-lg-4">
            <div class="card rounded-0 shadow border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h4>Specializat<span class="text-primary">ions</span></h4>
                    </div>
                    @foreach($special_all as $data)
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="card border-0 shadow rounded-0">
                                    <div class="card-body pb-2 d-flex align-items-center justify-content-between pr-0">
                                        <div>
                                            <div class="row">
                                                <h5>{{ $data->specialization_name }}</h5>
                                            </div>
                                            <div class="row">
                                                <small class="text-muted">{{ $data->job_categories }}</small>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-warning btn-sm p-2 rounded-circle mr-0" data-toggle="modal" data-target="#special{{ $data->primary }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm p-2 rounded-circle ml-0">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($role as $data)
<div class="modal fade" id="roles{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header yellow darken-2">
                <h5 class="modal-title" id="exampleModalLabel">Update Data "{{ $data->job_role_name }}"</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/job-roles/roles/edit/{{$data->id}}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form input-with-post-icon">
                                <i class="fas fa-user input-prefix"></i>
                                <input type="text" name="job_role_name" id="job_role" class="form-control" value="{{ $data->job_role_name }}">
                                <label for="job_role">Job Role</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-warning btn-md btn-block border-0 shadow">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach($special_all as $data)
<div class="modal fade" id="special{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header yellow darken-2">
                <h5 class="modal-title" id="exampleModalLabel">Update Data "{{ $data->specialization_name }}"</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/job-roles/specialization/edit/{{ $data->primary }}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5">
                            <label for="category">Job Category</label>
                            <select name="category_name" class="form-control" id="category">
                                    <option value="{{ $data->category_name }}">{{ $data->job_categories }}</option>
                                @foreach($category as $datas)
                                    <option value="{{ $datas->id }}">{{ $datas->job_categories }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" name="specialization_name" class="form-control" id="special" value="{{ $data->specialization_name }}">
                                        <label for="special">
                                            <small>Specialization</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-warning btn-block rounded-0 border-0 btn-md">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection