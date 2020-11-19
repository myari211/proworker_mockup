@extends('master.layouts.app')
@section('content')
<div class="row mt-4 d-flex justify-content-center">
    <div class="col-lg-11 d-flex align-items-center justify-content-between">
        <img src="{{ asset('img/logo.png') }}" style="width:200px">
        <div class="row d-inline-flex align-items-center pl-4">
            <p class="mt-3">Already have an account ?</p>
            <button type="button" class="btn blue-gradient text-white rounded-pill btn-md">
                Sign In
            </button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <h2><b>Hello, welcome to your platform!</b></h2>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <h4>First of all, How can we help you?</h4>
    </div>
    <div class="row" style="margin-top:100px;">
        <div class="col-lg-6">
            <div class="card z-depth-3 rounded-0 border-0">
                <div class="card-body p-5">
                    <div class="row d-flex justify-content-center">
                        <h4>I am looking for work</h4>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <p>Create a <b>Proworker</b> Account</p> 
                    </div>
                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="button" class="btn blue-gradient btn-block btn-lg text-white rounded-pill" onclick="Register()">
                                Looking For Jobs
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card z-depth-3 rounded-0 border-0">
                <div class="card-body p-5">
                    <div class="row d-flex justify-content-center">
                        <h4>I am Looking To Hire</h4>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <p>Create a <b>recruiter</b> Account</p>
                    </div>
                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="button" class="btn blue-gradient btn-lg btn-block rounded-pill">
                                Hire Profesional Worker
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <small class="text-white"><b>- GIVE PROFESSIONAL WORKER A PERFECT VEHICLE TO WORK EVERYWHERE -</b></small>
    </div>
</div>
@endsection