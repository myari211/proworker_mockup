@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h3>Input Ski<span class="text-primary">lls</span>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form input-with-post-icon">
                                <i class="fas fa-briefcase input-prefix"></i>
                                <label for="skill">Skill Name</label>
                                <input type="text" name="skill_name" class="form-control" id="skill">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-md btn-primary border-0 shadow btn-block">Save</button>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end p-3">
                        <h3>Skills L<span class="text-primary">ist</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection