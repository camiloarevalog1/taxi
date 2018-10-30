@extends('layouts.cliente')

@section('content')

 <section class="tables">   
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de Solicitudes</h3>
                    </div>

                            <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Ubicacion</th>
                                <th scope="col">Destino</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Opciones</th>
                              </tr>
                              
                            </thead>
                            <tbody>
                      <?php $tot=0;?>
                       @forelse($solicitud as $s) 
                              <tr>
                   
                                <td>{{ $s->id }}</td>
                                     <?php $s->idCliente ?>
                                <td>{{ $s->ubicacion }}</td>
                                <td>{{ $s->destino }}</td>
                                <td>{{ $s->precio }}</td>
                              <form method="POST" action="{{url('/cliente/'.$s->id)}}">
                              {{csrf_field()}}
                              <input name="_method" type="hidden" value="DELETE">

                              <!--td><span class="badge">Sin opciones disponibles</span></th-->
                              <td>
                              <button class="btn btn-danger"  type="submit" class="btn btn-primary">Eliminar</button></td>

                              </form>
                              </tr>
                             <?php $tot += $s->precio; ?>
                         @empty

<div class="alert alert-danger" role="alert">
  no se ha registrado ninguna solicitud aun <a href="#" class="alert-link"></a>. 
</div>
                          @endforelse 

                          <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col-12 text-center"> <?php echo "Total: $".$tot ?></th>
                              </tr>
                              </thead></table>
                            </tbody>
                          </table>
                  
                
                </div>
              </div>
            </div>


          </section>

@endsection