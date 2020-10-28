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
            <div class="bg-light border-right" id="sidebar-wrapper">
              <div class="sidebar-heading">
                <img src="{{ asset('img/logo.png') }}" class="heading">
              </div>
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Your Profile</a>
              </div>
            </div>
            <!-- /#sidebar-wrapper -->
        
            <!-- Page Content -->
            <div id="page-content-wrapper">
              <div class="container">
                <div class="row d-flex justify-content-between">
                  <div>
                    <button class="btn btn-primary btn-lg pt-2 pl-3 pr-3 pb-2 rounded-circle shadow" id="menu-toggle">
                      <i class="fas fa-bars"></i>
                    </button>
                  </div>
                  <div>
                    <button type="button" class="btn btn-white btn-lg text-primary pr-3 pl-3 pt-2 pb-2 rounded-circle">
                      <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-white btn-lg text-primary pr-3 pl-3 pt-2 pb-2 rounded-circle">
                      <i class="fas fa-bell"></i>
                    </button>
                    <button type="button" class="btn btn-white btn-lg text-primary pr-3 pl-3 pt-2 pb-2 rounded-circle" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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