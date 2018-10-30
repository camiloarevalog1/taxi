@extends('layouts.admin')

@section('content')

@if($respuesta != null)

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Transaccion Exitosa</h4>
  <p>La tarifa se ha agregado con exito al sistema.</p>
  <hr>
  <p class="mb-0">id de la tarifa : <h4>{{ $respuesta->id }}</h3></p>
  <p class="mb-0">valor de la tarifa : <h4>{{ $respuesta->valor }}</h3></p>
  <p class="mb-0">descripcion de la tarifa : <h4>{{ $respuesta->descripcion }}</h3></p>
</div>

@else


<div class="alert alert-danger" role="alert">
  se ha encontrado un error <a href="#" class="alert-link"></a>. comunicate con un acesor
</div>

@endif


@endsection