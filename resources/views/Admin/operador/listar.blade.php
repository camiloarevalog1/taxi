@extends('layouts.admin')

@section('content')

 <section class="tables">   
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Operadores</h3>
                    </div>

     

  
                  
                            <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">username</th>
                                <th scope="col">email</th>
                                <th scope="col">editar</th>
                                <th scope="col">eliminar</th>
                              </tr>
                            </thead>
                            <tbody>

                       @forelse($operadores as $operador) 
                              <tr>
                   
                                <td>{{ $operador->id }}</td>
                                <td>{{ $operador->username }}</td>
                                <td>{{ $operador->email }}</td>
                                <td>                                              
                                <a class="btn btn-primary" href="{{ url('/editarOperador',[$operador->id]) }}" role="button" >editar</a> 
                                </td>
                                <td>
                                <a class="btn btn-danger" href="{{ url('/eliminarOperador',[$operador->id]) }}" role="button">eliminar</a> 
                                </td>

                              </tr>
                         @empty

<div class="alert alert-danger" role="alert">
  no se ha registrado ningun operador <a href="#" class="alert-link"></a>. 
</div>
                          @endforelse   
                            
                            </tbody>
                          </table>
                  
                
                </div>

 <a class="btn btn-primary" href="{{ url('/agregarOper') }}" role="button">agregar Nuevo</a> 





              </div>
            </div>


          </section>

@endsection