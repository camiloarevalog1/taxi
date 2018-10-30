@extends('layouts.cliente')

@section('content')

@if($respuesta != null)

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Transaccion Exitosa</h4>
  <p>Solicitud exitosa.</p>
  <hr>
  <p class="mb-0">Ubicacion: <h3>{{ $respuesta->ubicacion }}</h3>
  <p class="mb-0">Destino: <h3>{{ $respuesta->destino }}</h3> 
  <p class="mb-0">Precio: <h3> $ {{ $respuesta->precio }}</h3> 
</div>

@else


<div class="alert alert-danger" role="alert">
  se ha encontrado un error <a href="#" class="alert-link"></a>. comunicate con un accesor
</div>

@endif


@endsection