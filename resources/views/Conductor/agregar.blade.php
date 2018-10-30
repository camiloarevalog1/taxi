@extends('layouts.conductor')

@section('content')

  <div id="map"></div>
  <form method="POST" action="{{ route('addConductor')}}" name="f1" id="f1">
  {{ csrf_field() }}	
  <input name="lat" id="lat" type="hidden" />
  <input name="lon" id="lon" type="hidden" />
  <input class="btn btn-primary "  type="submit" value="Activar" id="miParrafo" onclick="cambia('miParrafo')"  />
</form>

<style type="text/css">
#miParrafo {color:red; }

nav.side-navbar ul a:hover {
    background: #f9d469;
    border-left: 4px solid #e6d525;
    color: #fff;
}
 #map {
        height: 250%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

</style>
<script type="text/javascript">

function cambia(capa){
var e = document.getElementById(capa);
e.style.color =(e.style.color=="green")? 'red':'green';
}

</script>


      <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

document.f1.lat.value= position.coords.latitude;
          document.f1.lon.value= position.coords.longitude;
            infoWindow.setPosition(pos);
            infoWindow.setContent('Esta es tu ubicacion.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzdiQa8VexnghQVR-amtTqEmYdRIQZ258&callback=initMap">
    </script>
    <br><br><br><br><br>
@endsection