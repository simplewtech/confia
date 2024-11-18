@extends('layouts.app')
@section('contenido')
@error('tipo_movimientos_id')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('personas_id')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('nombre')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('movimientos.store') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Crear nuevo Movimiento</h4>
                    <div class="form-group row">
                        <label for="tipo_movimientos_id"
                            class="col-sm-3 text-end control-label col-form-label">Tipo movimientos ID</label>
                        <div class="col-sm-9">
                            <select name="tipo_movimientos_id" class="form-control" id="tipo_movimientos_id">
                                <option value="">Selecciona un tipo de movimiento</option>
                                @foreach ($tipo_movimientos as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="personas_id"
                            class="col-sm-3 text-end control-label col-form-label">Personas ID</label>
                        <div class="col-sm-9">
                            <select name="personas_id" class="form-control" id="personas_id">
                                <option value="">Selecciona una persona asignada al movimiento</option>
                                @foreach ($personas as $key => $value)
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
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-dark me-md-2" href="{{route('movimientos.index')}}" role="button">Volver al listado</a>
                </div>
            </form>
        </div>
@endsection
