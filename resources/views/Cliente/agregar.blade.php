@extends('layouts.cliente')

@section('content')

 <div id="map"></div>
<div class="container">
<div class="row">

<div class="jumbotron">

<h1>Tarifa</h1>

</div>

<div class="col-md-6">
  <br><br><br>
<form method="POST" action="{{ route('agregarSolicitud')}}" name="f1" id="f1">
	   {{ csrf_field() }}	


<div class="form-group"><label>Origen: </label> <input class="form-control" id="from_places"  placeholder="Dirrección Origen" autocomplete="off" required /> <input id="origin" name="origin" required type="hidden" /> <p id="elemento1"></p></div>

<div class="form-group"><label>Destino: </label> <input class="form-control" id="to_places" placeholder="Dirrección destino" autocomplete="off" required/> <input id="destination" name="destination" required type="hidden" /><p id="elemento2"></p></div>
<input class="btn btn-primary "  type="submit" value="Solicitar"  />
<input name="f1t1" id="f1t1" type="hidden" />
</form>



<form id="distance_form" >

	<input id="origin" name="origin" required="" type="hidden" 
	 onchange="document.getElementById('elemento1').innerHTML=this.value" />
	
    <input id="destination" name="destination" required="" type="hidden" 
	onchange="document.getElementById('elemento2').innerHTML=this.value"/>
	
	
<div id="result">
<ul class="list-group">
  <br>
	<li class="list-group-item d-flex justify-content-between align-items-center">Kms:  <p id="demo"></p>
  </li>
	
  <li class="list-group-item d-flex justify-content-between align-items-center">Duracion aprox:<p id="demo2" ></p></li>
	  
 
<li class="list-group-item d-flex justify-content-between align-items-center">La carrera cuesta: <p id="demo3" > </p></li>
</ul>

</div>
<br>

<input class="btn btn-default" type="submit" value="Calcular" />
</form>
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
					          $km=distance_in_kilo;
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
				
					document.getElementById("demo").innerHTML =new Intl.NumberFormat("de-DE").format(Math.round(distance_in_kilo)) +" km";
				
					document.getElementById("demo2").innerHTML =duration_text;
			

        $unid= ($km*1000)/60;
        if($unid<=80){
            $precio=4000;
        }else{
            $unid = ($unid-80);
            $precio = (4000 + (($unid/2)*100));
        }
        $valor=new Intl.NumberFormat("de-DE",{ maximumSignificantDigits: 2 }).format(Math.round($precio));
        document.f1.f1t1.value =$valor*1000;
        document.getElementById("demo3").innerHTML ="$ "+ $valor;

        
        }
        }
        }
        // print results on submit the form
        $('#distance_form').submit(function(e){
            e.preventDefault();
            calculateDistance();
        });

    });

</script>
@endsection