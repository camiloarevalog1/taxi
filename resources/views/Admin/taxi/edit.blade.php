<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


<style type="text/css">
  
.agregar {

color: #000000;

}


</style>

  </head>
  <body>
    <div class="page charts-page">
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
                  <div class="brand-text brand-big"><span>Panel</span><strong>Administrador</strong></div>
                  <div class="brand-text brand-small"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
              
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
             
                <!-- Logout    -->
                <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
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
            <div class="avatar"><img src="../img/petro.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Administrador</h1>
             
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>

          <ul class="list-unstyled">
            <li> <a href="{{ url('/') }}"><i class="icon-home"></i>Home</a></li>

            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Opciones Conductor </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="{{ url('/listadoConductor') }}">listar</a></li>
                <li><a href="{{ url('/agregarConductor') }}">agregar</a></li>
                <li><a href="#">buscar</a></li>
               
              </ul>
            </li>

             <li><a href="#dashvariants2" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Opciones Taxis </a>
              <ul id="dashvariants2" class="collapse list-unstyled">
                <li><a href="{{ url('/listadoTaxi') }}">Listar</a></li>
                <li><a href="{{ url('/agregarTaxis') }}">agregar</a></li>
                <li><a href="#">buscar</a></li>
               
              </ul>
            </li>

             <li><a href="#dashvariants3" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Opciones clientes </a>
              <ul id="dashvariants3" class="collapse list-unstyled">
                <li><a href="{{ url('/listadoClientes') }}">Listar</a></li>
                <li><a href="#">buscar</a></li>
               
              </ul>
            </li>

             <li><a href="#dashvariants4" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Opciones operador </a>
              <ul id="dashvariants4" class="collapse list-unstyled">
                <li><a href="{{ url('/listadoOperador') }}">Listar</a></li>
                <li><a href="{{ url('/agregarOper') }}">agregar</a></li>
                <li><a href="#">buscar</a></li>
               
              </ul>
            </li>


          </ul><span class="heading">Extras</span>

          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Opciones tarifa </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Opciones pago </a></li>
           
          </ul>
        </nav>


        <div class="content-inner">

<div class="row agregar">
 <div class="col-lg-10">
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">Agregar Taxi</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="{{ url('/editTaxi',[$taxi->id]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">placa</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="placa"  value="{{ $taxi->placa}}"  required>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">modelo</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="modelo" value="{{ $taxi->modelo}}" required>
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">marca</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="marca" value="{{ $taxi->marca}}" required>
                          </div>
                        </div>

                      <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">conductor asignado</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="c"  value="{{ $con }}" disabled >
                          </div>
                        </div>
                     
                        <div class="line"></div>
                          @if(isset($conductores))
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">empleado</label>
                          <div class="col-sm-9 select">
                          <select  name="conductor" class="form-control" ">
                           <option   id="contar" >escoja una opcion</option>
                          @foreach($conductores as $conductor) 

                                    <option   id="contar"   value="{{ $conductor['id'] }}" >{{ $conductor['nombres'] }}</option>
                          @endforeach 
                          
                            </select>
                          </div>
                        </div>


                        <div class="line"></div>

                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>






                          @else

                          <div class="alert alert-danger" role="alert">
                           no se ha registrado ningun conductor por favor registra uno primero <a href="#" class="alert-link"></a>. 
                          </div>
                          @endif
                       
                       
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 </div>
  </div>




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
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../js/front.js"></script>
  </body>
</html>