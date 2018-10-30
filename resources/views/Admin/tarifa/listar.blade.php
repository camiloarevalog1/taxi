@extends('layouts.admin')

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
                        no se ha registrado ninguna tarifa <a href="#" class="alert-link"></a>. 
                      </div>
                          @endforelse   
                            
                            </tbody>
                          </table>
                  
                
                </div>

 <a class="btn btn-primary" href="{{ url('/agregarTar') }}" role="button">agregar Nueva tarifa conductor</a> 


</div>


<br>
<br>



            </div>


          </section>

@endsection