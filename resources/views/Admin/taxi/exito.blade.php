@extends('layouts.admin')

@section('content')

@if($respuesta != null)

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Transaccion Exitosa</h4>
  <p>El taxi se ha agregado con exito al sistema.</p>
  <hr>
  <p class="mb-0">placa del taxi : <h4>{{ $respuesta->placa }}</h3></p>
  <p class="mb-0">modelo del taxi : <h4>{{ $respuesta->modelo }}</h3></p>
  <p class="mb-0">marca del taxi : <h4>{{ $respuesta->marca }}</h3></p>
  <p class="mb-0">conductor asignado del taxi : <h4>{{ $respuesta->idConductor }}</h3></p>
</div>

@else


<div class="alert alert-danger" role="alert">
  se ha encontrado un error <a href="#" class="alert-link"></a>. comunicate con un acesor
</div>

@endif


@endsection