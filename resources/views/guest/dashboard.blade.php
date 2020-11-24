@extends('guest.layouts.app')
@section('content')
<div class="d-flex justify-content-end">
    <img src="{{ asset('img/side_right.png') }}" style="position:absolute">
</div>
<nav class="mb-5 navbar navbar-expand-lg navbar-dark d-flex justify-content-between border-0 z-depth-0">
    <img class="navbar-brand" src="{{ asset('img/logo.png') }}" style="width:200px;">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item ml-4">
            <a class="nav-link" href="">About Us</a>
        </li>
        <li class="nav-item ml-4">
            <a class="nav-link" href="">Find Jobs</a>
        </li>
        <li class="nav-item ml-4">
            <a class="nav-link" href="">Find Professional</a>
        </li>
        <li class="nav-item ml-4 mr-5">
            <a class="nav-link" href="">Contact Us</a>
        </li>
    </ul>
    <div>
        <button type="button" class="btn btn-md btn-success z-depth-3" onclick="window.location.href='/login'">Sign In</button>
        <button type="button" class="btn btn-md btn-success" onclick="window.location.href='/signup'">Sign Up</button>
    </div>
</nav>
<div class="container">
    <div class="row d-flex align-items-center" style="margin-top:180px;">
        <div class="col-lg-6">
            <div class="row">
                <h1 style="font-size:50px;"><b>Professional Platform <span class="text-primary">For You</span></b></h1>
            </div>
            <div class="row">
                <h5 class="text-muted"><b>Work Anytime and Anywhere ever you are.</b></h5>
            </div>
            <div class="row mt-2">
                <div class="col-lg-8 pl-0 input-with-pre-icon">
                    <div class="card shadow" style="border-left:10px solid #4285F4">
                        <div class="card-body pt-2 pb-2">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-1">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" style="border:0; active:none;" placeholder="Enter Your Email Address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <button type="button" class="btn btn-success btn-md ml-0 shadow rounded-lg pt-3 pb-3" onclick="window.location.href='/register'">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-end d-flex align-items-end">
            <img src="{{ asset('img/vector_dashboard.png') }}" style="width:100%">
        </div>
    </div>
</div>
@endsection
    
{{-- 
<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fab fa-google-plus-g"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
</div> --}}