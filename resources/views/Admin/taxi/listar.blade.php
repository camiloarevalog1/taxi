@extends('layouts.admin')

@section('content')

 <section class="tables">   
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Taxis</h3>
                    </div>

     

  
                  
                            <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">placa</th>
                                <th scope="col">modelo</th>
                                <th scope="col">marca</th>
                                <th scope="col">conductor</th>
                                <th scope="col">editar</th>
                                
                              </tr>
                            </thead>
                            <tbody>

                       @forelse($taxis as $taxi) 
                              <tr>
                   
                                <td>{{ $taxi->id }}</td>
                                <td>{{ $taxi->placa }}</td>
                                <td>{{ $taxi->modelo }}</td>
                                <td>{{ $taxi->marca }}</td>
                                <td>{{ $taxi->idConductor }}</td>
                                <td>                                              
                                <a class="btn btn-primary" href="{{ url('/editarTaxi',[$taxi->id]) }}" role="button" >editar</a> 
                                </td>
                               

                              </tr>
                         @empty

<div class="alert alert-danger" role="alert">
  no se ha registrado ningun taxi <a href="#" class="alert-link"></a>. 
</div>
                          @endforelse   
                            
                            </tbody>
                          </table>
                  
                
                </div>

 <a class="btn btn-primary" href="{{ url('/agregarTaxis') }}" role="button">agregar Nuevo</a> 





              </div>
            </div>


          </section>

@endsection