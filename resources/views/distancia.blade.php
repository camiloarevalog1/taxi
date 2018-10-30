<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<script
	  src="https://code.jquery.com/jquery-1.12.4.js"
	  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
	  crossorigin="anonymous"></script>
    
    <!--script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBhMCqVIFSKSrGowFtx9TKDDn-dGOeUJo&callback=initMap">
    </script-->
    
	<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDBhMCqVIFSKSrGowFtx9TKDDn-dGOeUJo"  type="text/javascript"></script>
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	 
    <style>
     
      #map {
        height: 80%;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>
 <div id="map"></div>
<div class="container">
<div class="row">

<div class="jumbotron">

<h1>Tarifa</h1>

</div>

<div class="col-md-6">
<form id="distance_form">
<div class="form-group"><label>Origen: </label> <input class="form-control" id="from_places" placeholder="Dirrección Origen" autocomplete="off"/> <input id="origin" name="origin" required="" type="hidden" /></div>

<div class="form-group"><label>Destino: </label> <input class="form-control" id="to_places" placeholder="Dirrección destino" autocomplete="off"/> <input id="destination" name="destination" required="" type="hidden" /></div>
<input class="btn btn-primary" type="submit" value="Calculate" /></form>

<div id="result">
<ul class="list-group">
	<li class="list-group-item d-flex justify-content-between align-items-center">La carrera cuesta:</li>
</ul>

</div>
</div>
</div>
</div>
<script>
    $(function() {
        // add input listeners
        google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });

        });
        // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                   // unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
					
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value/1000 ; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
					
					document.getElementById("demo").innerHTML =distance_in_kilo;
					document.getElementById("demo1").innerHTML =distance_in_mile;
					document.getElementById("demo2").innerHTML =duration_text;
					document.getElementById("demo3").innerHTML =duration_value;
                }
            }
        }
        // print results on submit the form
        $('#distance_form').submit(function(e){
            e.preventDefault();
            calculateDistance();
        });

    });

	
	//**ubicacion actual**//
	
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
document.getElementById("demo").innerHTML = position.coords.latitude;
document.getElementById("demo2").innerHTML =position.coords.longitude;
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
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
 <p id="demo"></p>
 <p id="demo1"></p>
 <p id="demo2"></p>
 <p id="demo3"></p>

 <!--iframe  	
 	width="450"
  	height="250" 	
	 src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDBhMCqVIFSKSrGowFtx9TKDDn-dGOeUJo&origin=Oslo+Norway&destination=Telemark+Norway&avoid=tolls|highways" 
  	
  	frameborder="0" y style="border:0"
  	
  ></iframe-->
  <p id="demo"></p>
<p id="demo2"></p>
 

</body>
</html>
