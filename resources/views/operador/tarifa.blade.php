@extends('layouts.oper')

@section('content')


 <section class="tables">   
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Tarifas</h3>
                    </div>

     

  
                  
                            <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">valor</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">editar</th>
                               
                              </tr>
                            </thead>
                            <tbody>

                       @forelse($tarifas as $tarifa) 
                              <tr>
                   
                                <td>{{ $tarifa->id }}</td>
                                <td>{{ $tarifa->valor }}</td>
                                <td>{{ $tarifa->descripcion }}</td>
                                <td>                                              
                                <a class="btn btn-primary" href="{{ url('/editarTarifaA',[$tarifa->id]) }}" role="button" >editar</a> 
                                </td>                       
                              </tr>
                         @empty

                      <div class="alert alert-danger" role="alert">
                         <h3>No hay tarifas registradas </h3> 
                      </div>
                          @endforelse   
                            
                            </tbody>
                          </table>
                  
                
                </div>




</div>


<br>
<br>



            </div>


          </section>


@endsection