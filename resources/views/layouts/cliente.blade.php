<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cliente</title>
   <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


<style type="text/css">
  
.agregar {

color: #000000;

}


header{
    background: #eedf6ac2;
    border-left: 4px solid #b5ae18c9;
    color: #141414;
}


nav.side-navbar ul a:hover {
    background: #eedf6ac2;
    border-left: 4px solid #b5ae18c9;
    color: #141414;
}


.btn-primary {
    color: #141414;
    background-color: #eedf6ac2;
    border-color: #b5ae18c9;
}

.btn-primary:hover {
    color: #31312b;
    background-color: #b5ae188a;
    border-color: #e9df3cc9;
}

nav.side-navbar.shrinked a:hover i {
    color: #000;
}

nav.side-navbar.shrinked a:hover {
    color: #060606;
    border: none;
}

</style>
     
      <script
    src="https://code.jquery.com/jquery-1.12.4.js"
    integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>
    
    <!--script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtYNI65wDT1veJpnrD4EYMkub39oB7jzM&callback=initMap">
    </script-->
   
  <!-- A P I --> 

  <script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=es&key=AIzaSyDBhMCqVIFSKSrGowFtx9TKDDn-dGOeUJo"  type="text/javascript"></script>
  
  <!--link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"-->
   
    <style>
     
      #mapita {
        height: 80%;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .agregar {
      color: #000000;
      }
    </style>



  </head>
  <body>
    <div class="charts-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>Panel</span><strong>Cliente</strong></div>
                  <div class="brand-text brand-small"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
              
           
                <!-- Messages                        -->
             
                
                 
                                <li class="nav-item">
                                    <a class="nav-link logout"   href="{{ url('/salirCliente') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ url('/salirCliente') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                       








              </ul>

            </div>
          </div>
        </nav>
      </header>


      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/petro.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Cliente</h1>
             
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>

          <ul class="list-unstyled">
            <li> <a href="{{ url('/cliente') }}"><i class="icon-home"></i>Cliente</a></li>

            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Opciones Cliente </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="{{ url('/solicitar') }}">Solicitar Taxi</a></li>
                <li><a href="{{ url('/cliente') }}">Solicitudes</a></li>
               

               
              </ul>
            </li>

            


			</ul>
        </nav>


        <div class="content-inner">
          <!-- Page Header-->
         
            
  @yield('content')

          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your Taxi &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Sami Arevalo</a></p>
                
                </div>
              </div>
            </div>
          </footer>
        </div>

       
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>