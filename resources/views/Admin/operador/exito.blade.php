@extends('layouts.admin')

@section('content')

@if($respuesta != null)

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Transaccion Exitosa</h4>
  <p>El operador se ha agregado con exito al sistema.</p>
  <hr>
  <p class="mb-0">nombre del Operador : <h4>{{ $respuesta->username }}</h3></p>
  <p class="mb-0">email del Operador : <h4>{{ $respuesta->email }}</h3></p>
  <p class="mb-0">contraseña del Operador : <h4>{{ $pas }}</h3></p>
</div>

@else


<div class="alert alert-danger" role="alert">
  se ha encontrado un error <a href="#" class="alert-link"></a>. comunicate con un acesor
</div>

@endif


@endsection