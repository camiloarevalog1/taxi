@extends('layouts.admin')

@section('content')

 <section class="tables">   
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Clientes</h3>
                    </div>

     

  
                  
                            <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">email</th>
                                <th scope="col">nombre</th>
                                <th scope="col">telefono</th>
                                <th scope="col">facturas</th>
                              </tr>
                            </thead>
                            <tbody>

                       @forelse($clientes as $cliente) 
                              <tr>
                   
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->name }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>                                              
                                <a class="btn btn-primary" href="" role="button" >facturas</a> 
                                </td>
                              </tr>
                         @empty

<div class="alert alert-danger" role="alert">
  no se ha registrado ningun cliente aun <a href="#" class="alert-link"></a>. 
</div>
                          @endforelse   
                            
                            </tbody>
                          </table>
                          <div class="d-flex justify-content-center" style="text-align: center;">
      @if(count($clientes))

        {{ $clientes->links('pagination::bootstrap-4') }}

      @endif 
</div>
      <br>
      <br>
      <br>
                  
                
                </div>

 





              </div>
            </div>


          </section>

@endsection