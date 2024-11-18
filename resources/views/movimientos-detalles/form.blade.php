@extends('layouts.app')
@section('contenido')
@error('movimientos_id')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('productos_id')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('nombre')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('cantidad')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('valor')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('movimientos-detalles.store') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Crear nuevo movimiento detalle</h4>
                    <div class="form-group row">
                        <label for="tipo_movimientos_id"
                            class="col-sm-3 text-end control-label col-form-label">movimientos ID</label>
                        <div class="col-sm-9">
                            <select name="movimientos_id" class="form-control" id="movimientos_d">
                                <option value="">Selecciona un movimiento asignado al detalle del movimiento</option>
                                @foreach ($movimientos as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="personas_id"
                            class="col-sm-3 text-end control-label col-form-label">Productos ID</label>
                        <div class="col-sm-9">
                            <select name="productos_id" class="form-control" id="productos_d">
                                <option value="">Selecciona un producto asignado al detalle del movimiento</option>
                                @foreach ($productos as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombre"
                            class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                placeholder="Escriba el nombre del movimiento">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cantidad"
                            class="col-sm-3 text-end control-label col-form-label">Cantidad </label>
                        <div class="col-sm-9">
                            <input type="text" name="cantidad" class="form-control" id="cantidad"
                                placeholder="Escriba la cantidad del movimiento">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="valor"
                            class="col-sm-3 text-end control-label col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input type="text" name="valor" class="form-control" id="valor"
                                placeholder="Escriba el valor del movimiento">
                        </div>
                    </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-dark me-md-2" href="{{route('movimientos-detalles.index')}}" role="button">Volver al listado</a>
                </div>
            </form>
        </div>
@endsection
