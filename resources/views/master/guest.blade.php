@extends('master.layouts.app')
@section('content')
<div class="row d-flex justify-content-between align-items-center mt-4 pl-4 pr-4">
    <div>
        <img src="{{ asset('img/logo.png') }}" style="width:250px">
    </div>
    <div class="row d-flex align-items-center">
        <p>Already Have Account ?</p>
        <button type="button" class="btn btn-primary btn-md">
            Sign In
        </button>
    </div>        
</div>
<div class="container">
    <div class="row d-flex justify-content-between mt-4">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-4">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body p-5">
                            <div class="row d-flex justify-content-center">
                                <h4>I am looking for work</h4>
                            </div>
                            <div class="row d-flex justify-content-center mt-2">
                                <p>Create a Proworker Account</p>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-primary btn-md btn-block">
                                        Start Looking For Jobs
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body p-5">
                            <div class="row d-flex justify-content-center">
                                <h4>I am Looking to hire</h4>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center">
                                <p>Create a recruiter account</p>
                            </div>
                            <div class="row d-flex justify-content-center mt-4">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-md btn-primary btn-block">
                                        Start for post a job
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
