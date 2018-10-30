<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <title>YourTaxi</title>
    <meta name="description" content="">
    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
    <meta name="robots" content="all,follow">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
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

  #map {
        height: 80%;
        width: 100%;
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


        
      </div>
    </nav>




      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="../img/operador.jpg" alt="..." width="300px" height="300px"  class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Operador</h1>
             
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>

          <ul class="list-unstyled">




           </ul>
           
           <span class="heading">Opciones</span>

       

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



        </nav>

        <div class="content-inner">
          <!-- Page Header-->



<h2 style="text-align: center;">ubicacion de los conductores</h2>
<div id="map"></div>



<div class="row agregar">
 <div class="col-lg-10">
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">asignar</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="{{ route('asignacion')}}" method="post">
                        {{ csrf_field() }}
                      
                       


                      
                     
                          <div class="line" ></div>
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Conductor</label>
                          <div class="col-sm-9 select">
                          <select  name="conductor" class="form-control">
                           <option   id="contar" >escoja el conductor</option>
                          @foreach($conductores as $conductor) 

                            <option   id="contar"   value="{{ $conductor['id'] }}" required>{{ $conductor['nombres'] }}</option>
                          @endforeach 
                          
                            </select>
                          </div>
                        </div>


                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">nombre del cliente</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="modelo"  value="{{ $cliente['name'] }}" disabled>
                            <input type="text" name="cliente" value="{{ $cliente['id'] }}" style="visibility:hidden;"> 
                          </div>
                        </div>

                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ubicacion</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="modelo"  value="{{ $solicitud['ubicacion'] }}" disabled>
                            <input type="text" name="solicitud" value="{{ $solicitud['id'] }}" style="visibility:hidden;"> 
                          </div>
                        </div>


                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">destino</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="modelo"  value="{{ $solicitud['destino'] }}" disabled>
                          </div>
                        </div>

                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">precio</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="modelo"  value="{{ $solicitud['precio'] }}" disabled>
                          </div>
                        </div>


                        <div class="line"></div>

                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>


                       
                      </form>
                    </div>
                  </div>
                </div>
              </div>



</div>
 


















<?php
//dd(class_exists('DOMDocument'));
header("Content-type: text/xml");
$dom = new DOMDocument("1.0");
$node = $dom->createElement("conductores");
$parnode = $dom->appendChild($node);

// Iterate through the rows, adding XML nodes for each

foreach ($sql as $bd) {

  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("latitud", $bd->latitud);
  $newnode->setAttribute("longitud", $bd->longitud);
  $newnode->setAttribute("type", $bd->type);
  $newnode->setAttribute("ubicacion", $bd->ubicacion);

}

echo $dom->saveXML();
$dom->save('conductores.xml');

?>
<script>
    var iconBase = 'https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml';
        var icons = {
          taxi: {
            icon:'https://78.media.tumblr.com/c9761a249b7be77dd305ae003cea4e69/tumblr_pa0c1syYFW1rk8yepo1_75sq.png'
          },
          cliente: {
            icon:'https://www.google.com.co/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwih5sbxveDbAhXGrVkKHQWvB9wQjRx6BAgBEAU&url=https%3A%2F%2Fpixabay.com%2Fes%2Fhombre-vector-ilustraci%25C3%25B3n-icono-3263509%2F&psig=AOvVaw0OCt2Ik3F0sjVUSkU9Bb48&ust=1529523661286482'
          }
        };

    /**********************************************/
     var customLabel = {
        taxi: {
          label: 'T'
        },
        cliente: {
          label: 'C'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(7.8890971, -72.49668959999997),
          zoom: 15,

        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl("{{asset('conductores.xml')}}", function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('id');
              var address = markerElem.getAttribute('ubicacion');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('latitud')),
                  parseFloat(markerElem.getAttribute('longitud')));

              var infowincontent = document.createElement('div');





             var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,

                 /*label: icon.label,*/
                  icon: icons[type].icon,
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAn3EA9rPin9K3wGPBKrtnMYvIE0AlOVSg&callback=initMap" async defer></script>




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