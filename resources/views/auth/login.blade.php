@extends('master.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4 d-flex justify-content-between">
        <img src="{{ asset('img/logo.png') }}" style="width:200px;">
        <div class="row d-flex align-items-center">
            <p class="mt-3">Don't have an account ?</p>
            <button type="button" class="btn blue-gradient btn-sm rounded-pill text-white" onclick="Redirect()">
                Sign Up
            </button>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card rounded-0 z-depth-3 border-0">
                <div class="card-body p-5">
                    <div class="row d-flex justify-content-center">
                        <h3><b>Welcome Back !</b></h3>
                    </div>
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="md-form">
                                    <input type="email" class="form-control" name="email" id="email">
                                    <label><i class="fas fa-envelope mr-2"></i>Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="md-form">
                                    <input type="password" class="form-control" name="password" id="password">
                                    <label><i class="fas fa-lock mr-2"></i>Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <button type="submit" class="btn blue-gradient text-white btn-lg btn-block rounded-pill">
                                    Sign In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <small class="text-white"><b>- GIVE PROFESSIONAL WORKER A PERFECT VEHICLE TO WORK EVERYWHERE -</b></small>
    </div>
</div>
@endsection





























{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


{{-- 

<html>
    <head>
        <meta charset="utf-8" name="viewport" scale="0.1">
        <title>Pro Worker | Bring Profesional Worker Cross Nations</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body class="blue darken-2">
        <div class="container">
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="card rounded-0 shadow mb-4">
                        <div class="card-body">
                            <div class="row mt-4 d-flex justify-content-center">
                                <h4>Log <span class="text-primary">In</span></h4>
                            </div>
                            <div class="row mt-5 d-flex justify-content-center">
                                <img src="{{ asset('img/logo.png') }}" class="logo-login">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mt-4 d-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="md-form input-with-post-icon">
                                            <i class="fas fa-at input-prefix"></i>
                                            <label for="email">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
        
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="md-form input-with-post-icon">
                                            <i class="fas fa-lock input-prefix"></i>
                                            <label for="password">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mt-2">
                                    <div class="col-lg-10 d-flex justify-content-between offset-lg-1">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                            <small>{{ __('Forgot Your Password?') }}</small>
                                            </a>
                                        @endif
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <small class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row d-flex justify-content-center mt-4">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-4 d-flex justify-content-center">
                                <a href="/register">
                                    <small> Don't have an account? Sign Up</small>
                                </a>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <button type="button" class="btn btn-danger btn-block" onclick="location='/auth/google';">Sign In with Google</button>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <button type="button" class="btn blue darken-2 btn-block text-white">Sign In With Facebook</button>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <small class="text-muted">2020 &copy; Proworker | All rights reserved</small> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    </body>
</html>
 --}}
