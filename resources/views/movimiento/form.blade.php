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
            <div class="card-header">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-danger me-md-2 text-white" href="{{route('movimiento.index')}}" role="button">Cancelar</a>
                </div>
                <h4 class="card-title">Crear nuevo Movimiento</h4>
            </div>
            <form class="form-horizontal" action="{{ route('movimiento.store') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="tipo_movimientos_id"
                            class="col-sm-3 text-end control-label col-form-label">Tipo movimientos ID</label>
                        <div class="col-sm-9">
                            <select name="tipo_movimiento_id" class="form-control" id="tipo_movimiento_id">
                                <option value="">Selecciona un tipo de movimiento</option>
                                @foreach ($tipo_movimiento as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="persona_id"
                            class="col-sm-3 text-end control-label col-form-label">Personas ID</label>
                        <div class="col-sm-9">
                                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" name="persona_id" id="persona_id">
                                    <option disabled selected>Selecciona una persona asignada al movimiento</option>
                                            @foreach ($persona as $key => $value)
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
                        <label for="fecha" class="col-sm-3 text-end control-label col-form-label">Fecha <small class="text-muted">dd/mm/yyyy</small></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control date-inputmask" name="fecha" id="fecha" placeholder="Escriba la fecha del movimiento">
                        </div>
                    </div>
                    <div class="border-top">
                    <div class="card-body d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success text-white">Crear</button>
                    </div>
                </div>
            </form>
        </div>
@endsection
