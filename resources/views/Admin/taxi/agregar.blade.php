@extends('layouts.admin')

@section('content')


<div class="row agregar">
 <div class="col-lg-10">
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">Agregar Taxi</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="{{ route('agregarTaxi')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">placa</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="placa" required>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">modelo</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="modelo" required>
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">marca</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="marca" required>
                          </div>
                        </div>

                      
                     
                        <div class="line"></div>
                          @if(!empty($conductores))
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">empleado</label>
                          <div class="col-sm-9 select">
                          <select  name="conductor" class="form-control">
                           <option   id="contar" >escoja el conductor</option>
                          @foreach($conductores as $conductor) 

                                    <option   id="contar"   value="{{ $conductor['id'] }}" >{{ $conductor['nombres'] }}</option>
                          @endforeach 
                          
                            </select>
                          </div>
                        </div>


                        <div class="line"></div>

                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>






                          @else

                          <div class="alert alert-danger" role="alert">
                           no se ha registrado ningun conductor por favor registra uno primero <a href="#" class="alert-link"></a>. 
                          </div>
                          @endif
                       
                       
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 </div>
  </div>
@endsection