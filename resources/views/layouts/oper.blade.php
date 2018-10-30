<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourTaxi</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<style type="text/css">

.agregar {

color: #000000;

}

  #map {
        height: 100%;
        width: 500px;
      }
      html, body {
        height: 100%
        margin: 0;
        padding: 0;
      }
      
      nav.side-navbar ul a:hover {
    background: #212529;
    border-left: 4px solid #3b25e6;
    color: #fff;
}



.btn-primary {
    color: #fff;
    background-color: #3b25e6;
    border-color: #3b25e6;
}



</style>






  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Panel Operador</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown dropdown-notifications">
              <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
              </a>

              <div class="dropdown-container">
                <div class="dropdown-toolbar">
                  <div class="dropdown-toolbar-actions">
                    
                  </div>
                  <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                </div>
                <ul class="dropdown-menu">
                
                </ul>
                <div class="dropdown-footer text-center">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
          

       
          <li> <a href="{{ url('/operador') }}"> <i class="icon-interface-windows"></i>Operador </a></li>
            <li> <a href="{{ url('/solicitudes') }}"> <i class="icon-interface-windows"></i>Listar tarifas conductores </a></li>
            <li> <a href="{{ url('/listadoClients') }}"> <i class="icon-screen"></i>listar clientes </a></li>


        
          </ul>


                                <li class="nav-item" style="position: absolute; top: 0; left: 1200px; padding-left: 30rem;">
                                    <a class="nav-link logout"   href="{{ url('/salirConductor') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">


                                   <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      salir <span class="caret"></span>
                                    </button>


                                </a>

                                <form id="logout-form" action="{{ url('/salirConductor') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>


        </div>

        
      </div>
    </nav>




<div class="container-fluid">
  

@yield('content')

</div>

  











          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  
                </div>
                <div class="col-sm-6 text-right">
                  

                </div>
              </div>
            </div>
          </footer>
















    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script src="notificacion/notificacion.js"></script>

  
  </body>
</html>
