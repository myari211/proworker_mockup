<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pro Worker | Bring Profesional Worker Cross Nations</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary z-depth-0">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="basicExampleNav">
                <a class="navbar-brand">
                    <img src="{{ asset('img/logopro2.png') }}">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#">Find Jobs</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="row pr-4 d-flex align-items-center">
                    <i class="fas fa-bell mr-3 text-white"></i>
                    <small class="mr-5 text-white">{{ Auth::user()->user_first_name }} {{ Auth::user()->user_last_name}}</small>
                    <a data-toggle="modal" data-target="#account">
                        <div class="view overlay rounded-circle">
                            @if(Auth::user()->avatar == null)
                                <img src="{{ asset('img/avatar-default.png') }}" style="width:40px;" class="img-fluid rounded-circle" data-toggle="modal" data-target="#account">
                            @else
                                <img src="{{ asset('img/'. Auth::user()->avatar) }}" data-toggle="modal" data-target="#account">
                            @endif
                            <div class="mask flex-center rgba-white-strong">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </nav>

    <div class="preloader">
        <div class="loading">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-success" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
        
    @include('sweetalert::alert')          
    @yield('content')


    <!--modal Account -->

    <div class="modal fade right" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-side modal-top-right modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            @if(Auth::user()->avatar == null)
                                <img src="{{ asset('img/avatar-default.png') }}" class="rounded-circle" style="width:80px;">
                            @else
                                <img src="{{ asset('img/'.Auth::user()->avatar ) }}" class="rounded-circle" style="100px;">
                            @endif
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <h4>{{ Auth::user()->user_first_name }} {{ Auth::user()->user_last_name }}</h4>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 p-0">
                            <a href="/talent/profile/{{ Auth::user()->id }}" class="nav-link list-profile">
                                <span class="text-muted"><i class="fas fa-user mr-3"></i>Profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-danger btn-sm btn-block">Log Out</button>
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
        <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
        <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
        </script>

        @yield('javascript')
    </body>
</html>