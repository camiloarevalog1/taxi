@extends('layouts.admin')

@section('content')


<div class="row agregar">
 <div class="col-lg-10">
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">Agregar Conductor</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="{{ route('agregar')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nombres</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" required>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">apellidos</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="apellido" required>
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">telefono</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="telefono" required>
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" required>
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" required>
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">user name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" required>
                          </div>
                        </div>

                          <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">RUT</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="rut" required>
                          </div>
                        </div>

                       
                         <div class="line"></div>
                          @if(!empty($tarifa))
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">tipo de tarifa</label>
                          <div class="col-sm-9 select">
                          <select  name="idAfiliacion" class="form-control">
                           <option   id="contar" >escoja la tarifa</option>
                          @foreach($tarifa as $ta) 

                                    <option   id="contar"   value="{{ $ta['id'] }}" >{{ $ta['descripcion'] }}</option>
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
                           no se ha registrado ninguna tarifa por favor registra una primero <a href="#" class="alert-link"></a>. 
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