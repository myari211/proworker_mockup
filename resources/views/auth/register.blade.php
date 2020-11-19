


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
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
                                <h4>Sign <span class="text-primary">Up</span></h4>
                            </div>
                            <div class="row mt-5 d-flex justify-content-center">
                                <img src="{{ asset('img/logo.png') }}" class="logo-login">
                            </div>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {!! csrf_field() !!}
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="md-form input-with-post-icon{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <i class="fas fa-at input-prefix"></i>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                                            <label for="email">E-Mail Address</label>
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="md-form input-with-post-icon{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <i class="fas fa-lock input-prefix"></i>
                                            <input type="password" class="form-control" name="password">
                                            <label for="password">Password</label>
                                        </div>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="md-form input-with-post-icon{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <i class="fas fa-lock input-prefix"></i>
                                            <input type="password" class="form-control" name="password_confirmation">
                                            <label for="password">Confirm Password</label>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="row d-flex justify-content-center mt-4">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Sign Up
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-4 d-flex justify-content-center">
                                <a href="/login">
                                    <small>Already have an account ? Log In</small>
                                </a>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <button type="button" class="btn btn-danger btn-block">Sign Up with Google</button>
                                </div>
                            </div>
                            <div class="row mt-2 d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <button type="button" class="btn blue darken-2 btn-block text-white">Sign Up With Facebook</button>
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
</html> --}}


