@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card shadow border-0 rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-end pr-4">
                            <h3>User L<span class="text-primary">ist</span>
                        </div>
                        <div class="row d-flex justify-content-center">
                            @if(count($user) < 1)
                                <h4>No Data</h4>
                            @else
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Specialization
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $data)
                                            <tr>
                                                <th scope="row">
                                                    <button type="button" class="btn btn-primary btn-sm" onClick = "window.open('/admin/user/{{ $data->primary }}'); ">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </th>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->user_first_name }} {{ $data->user_last_name }}</td>
                                                <td>0{{ $data->user_telephone }}</td>
                                                <td>{{ $data->job_role_name }}</td>
                                                <td>{{ $data->job_categories }}</td>
                                                <td>{{ $data->work_specialization }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection