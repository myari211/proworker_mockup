<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" scale="0.1">
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
          <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-primary border-0 shadow" id="sidebar-wrapper">
              <div class="sidebar-heading">
                <img src="{{ asset('img/login.png') }}" class="heading">
              </div>
              <div class="list-group list-group-flush">
                <a href="/talent/dashboard" class="list-group-item list-group-item-action bg-primary text-white d-flex justify-content-between align-items-center">
                  Dashboard
                  <i class="fas fa-user"></i>
                </a>
              </div>
              <div class="list-group list-group-flush">
                <a href="/talent/profile/{{ Auth::user()->id }}" class="list-group-item list-group-item-action bg-primary text-white d-flex justify-content-between align-items-center">
                  Profile
                  <i class="fas fa-user"></i>
                </a>
              </div>
              <div class="list-group list-group-flush pl-3">
                <a href="/talent/profile/work/{{ Auth::user()->id }}" class="list-group-item list-group-item-action bg-primary text-white d-flex justify-content-between align-items-center">
                  <small>Work Experience</small>
                  <i class="fas fa-user"></i>
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
                    <button type="button" class="btn btn-success btn-lg text-white pt-2 pb-2 pr-3 pl-3 shadow-0 rounded-0">
                        <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn blue darken-3 btn-lg text-white pt-2 pb-2 pr-3 pl-3 shadow-0 rounded-0">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button type="button" class="btn blue darken-3 btn-lg text-white pt-2 pb-2 pr-3 pl-3 rounded-0 shadow-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-user"></i>
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </div>
                @yield('content')
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