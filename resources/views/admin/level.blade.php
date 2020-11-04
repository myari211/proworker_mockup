@extends('admin.layouts.app')
@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card border-0 shadow rounded-0">
                <div class="card-body">
                    <form method="post" action="/admin/level/input">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form input-with-post-icon">
                                    <i class="fas fa-envelope input-prefix"></i>
                                    <input type="text" class="form-control" name="level_name" id="level_name">
                                    <label for="level_name">Level</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary btn-block btn-md border-0 shadow">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow border-0 rounded-0">
                <div class="card-body">
                    @foreach($level as $data)
                        <div class="row">
                            <h5>{{ $data->level_name }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection