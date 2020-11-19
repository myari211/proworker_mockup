@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <form action="/talent/update_profile/update/{{ Auth::user()->id }}" method="post">
                        @csrf
                        @foreach($profile as $data)
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" name="user_first_name" class="form-control" id="first_name"  value="{{ $data->user_first_name }}">
                                        <label for="first_name">First Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" name="user_last_name" class="form-control" id="last_name" value="{{ $data->user_last_name }}">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center  ">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-map-marked-alt input-prefix"></i>
                                        <input type="text" name="user_address" class="form-control" id="address" value="{{ $data->user_address }}">
                                        <label for="address">Adress</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="md-form">
                                        <input type="date" class="form-control" name="user_birth_date" id="birth_date" value="{{ $data->user_birth_date }}">
                                        <label for="birth_date">Birth Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-phone input-prefix"></i>
                                        <input type="number" class="form-control" name="user_telephone" id="phone" value="0{{ $data->user_telephone }}">
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label for="gender">Gender</label>
                                    <select name="user_gender" class="form-control" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label for="nationality">Nationality</label>
                                    <select name="user_nationality" class="form-control" id="nationality">
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </div>
                            </div>
                        @endforeach
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-md btn-block btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection