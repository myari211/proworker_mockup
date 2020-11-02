@extends('talent.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
                <div class="row d-flex justify-content-center">
                    <img src="{{ asset('img/registration.png') }}" class="dashboard-img">
                </div>
                <div class="row d-flex justify-content-center">
                    <h1>Hello, Welcome to <span class="text-primary">Pro Worker</span></h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <h3>Please, Complete Your Profile and Claim Your Job</h3>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-lg-10 d-flex justify-content-center">
                    <button type="button" class="btn btn-green btn-lg rounded-pill text-white border-0 shadow" onclick="window.location ='/talent/profile/{{ Auth::user()->id }}';">
                            Complete Your Profile&nbsp;&nbsp;
                            <i class="fas fa-user"></i>
                        </button>
                    </div>
                </div>
    </div>
</div>
<div class="row">

</div>
@endsection