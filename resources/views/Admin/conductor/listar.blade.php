@extends('layouts.admin')

@section('content')

 <section class="tables">   
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Conductores</h3>
                    </div>

     

  
                  
                            <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">correo</th>
                                <th scope="col">editar</th>
                                <th scope="col">Historial</th>
                              </tr>
                            </thead>
                            <tbody>

                       @forelse($conductores as $conductor) 
                              <tr>
                   
                                <td>{{ $conductor->id }}</td>
                                <td>{{ $conductor->nombres }}</td>
                                <td>{{ $conductor->apellidos }}</td>
                                <td>{{ $conductor->email }}</td>
                                <td>                                              
                                <a class="btn btn-primary" href="{{ url('/editar',[$conductor->id]) }}" role="button" >editar</a> 
                                </td>
                                <td>
                                <a class="btn btn-primary" href="" role="button">Historial</a> 
                                </td>

                              </tr>
                         @empty

<div class="alert alert-danger" role="alert">
  no se ha registrado ningun conductor <a href="#" class="alert-link"></a>. 
</div>
                          @endforelse   


                            
                            </tbody>
                          </table>
                          <br>
                       
<div class="d-flex justify-content-center" style="text-align: center;">
      @if(count($conductores))

        {{ $conductores->links('pagination::bootstrap-4') }}

      @endif 
</div>
      <br>
      <br>
      <br>
                
                </div>

 <a class="btn btn-primary" href="{{ url('/agregarConductor') }}" role="button">agregar Nuevo</a> 





              </div>
            </div>


          </section>

@endsection