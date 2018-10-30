@extends('layouts.admin')

@section('content')


<div class="row agregar">
 <div class="col-lg-10">
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">Agregar tarifa de afiliacion</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="{{ route('agregarTarifa')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">valor</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="valor" required>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">descripcion</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="descripcion" required>
                          </div>
                        </div>
                       
                        <div class="line"></div>

                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                           
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 </div>
  </div>
@endsection