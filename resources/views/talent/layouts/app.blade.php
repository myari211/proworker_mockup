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
          <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-primary border-0 shadow" id="sidebar-wrapper">
              <div class="sidebar-heading">
                <img src="{{ asset('img/login.png') }}" class="heading">
              </div>
              <div class="list-group list-group-flush">
                <a href="/talent/dashboard" class="list-group-item list-group-item-action bg-primary text-white d-flex justify-content-between align-items-center">
                  Dashboard
                  <small class="fas fa-user"></small>
                </a>
              </div>
              <div class="list-group list-group-flush">
                <span class="list-group-item list-group-item-action bg-primary text-white d-flex justify-content-between align-items-center">
                  Profile
                </span>
              </div>
              <div class="list-group list-group-flush pl-3">
                <a href="/talent/profile/{{ Auth::user()->id }}" class="list-group-item list-group-item-action bg-primary text-white d-flex justify-content-between align-items-center">
                  <small>Personal Information</small>
                  <i class="fas fa-user-tie"></i>
                </a>
              </div>
              <div class="list-group list-group-flush pl-3">
                <a href="/talent/profile/work/{{ Auth::user()->id }}" class="list-group-item list-group-item-action bg-primary text-white d-flex justify-content-between align-items-center">
                  <small>Work Experience</small>
                  <i class="fas fa-briefcase"></i>
                </a>
              </div>
            </div>
            <!-- /#sidebar-wrapper -->
        
            <!-- Page Content -->
            <div id="page-content-wrapper">
              <div class="navbar navbar-dark primary-color">
                    
                <div>
                    <button class="btn btn-lg pb-2 pt-2 pr-3 pl-3 blue darken-3 shadow-0 text-white" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div>
                  
                  <a class="fas fa-bell text-white"></a>
                    <button type="button" class="btn blue darken-3 btn-lg text-white pt-2 pb-2 pr-3 pl-3 rounded-0 shadow-0" data-toggle="modal" data-target="#account">
                        <i class="fas fa-user"></i>
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @include('sweetalert::alert')
              </div>
                @yield('content')
              </div>
              <!-- To change the direction of the modal animation change .right class -->
              <div class="modal fade right" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
              
                <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
                <div class="modal-dialog modal-side modal-top-right modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">
                          <div class="col-lg-4">
                            @if(Auth::user()->user_avatar == null)
                              <img src="{{ asset('img/avatar-default.png') }}" style="width:75px; height:75px;">
                            @else
                            @endif
                          </div>
                          <div class="col-lg-8">
                            <div class="row d-flex justify-content-end">
                              <h5>{{ ucfirst(trans(Auth::user()->user_first_name)) }} {{ ucfirst(trans(Auth::user()->user_last_name)) }}</h5>
                            </div>
                            <div class="row d-flex justify-content-end">
                              <button type="button" class="btn btn-sm btn-outline-primary mr-0 rouned-pill">
                                Look Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-sm btn-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        
        {{-- modal --}}
            


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