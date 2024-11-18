@extends('layouts.app')
@section('contenido')
@error('nombre')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('suma')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('tipo-movimientos.store') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Crear nuevos Tipos de Movimientos</h4>
                    <div class="form-group row">
                        <label for="nombre"
                            class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                placeholder="Escriba el nombre del nuevo movimiento">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="suma"
                            class="col-sm-3 text-end control-label col-form-label">Suma</label>
                        <div class="col-sm-9">
                            <input type="number" name="suma" class="form-control" id="suma"
                                placeholder="Escriba la suma del movimiento">
                        </div>
                    </div>
                    </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-dark me-md-2" href="{{route('tipo-movimientos.index')}}" role="button">Volver al listado</a>
                </div>
            </form>
        </div>
@endsection
