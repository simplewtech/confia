@extends('layouts.app')
@section('contenido')
    @error('nombre')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-danger me-md-2 text-white" href="{{route('movimiento-detalle.index')}}" role="button">Cancelar</a>
                    </div>
                    <h4 class="card-title">Editar Movimiento Detalle: {{$movimientoDetalle->nombre}}</h4>
                </div>
                <form class="form-horizontal" action="{{ route('movimiento-detalle.update', $movimientoDetalle) }}"  method="POST">
                    @csrf @method('put')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="movimiento_id"
                                class="col-sm-3 text-end control-label col-form-label">movimiento ID</label>
                            <div class="col-sm-9">
                                <select name="movimiento_id" class="form-control" id="movimiento_id">
                                    <option value="{{old('movimiento_id', $movimientoDetalle->movimiento_id ?? '')}}">Selecciona un movimiento asignado al detalle del movimiento</option>
                                    @foreach ($movimiento as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="persona_id"
                                class="col-sm-3 text-end control-label col-form-label">Productos ID</label>
                            <div class="col-sm-9">
                                <select name="producto_id" class="form-control" id="producto_d">
                                    <option value="{{old('producto_id', $movimientoDetalle->producto_id ?? '')}}">Selecciona un producto asignado al detalle del movimiento</option>
                                    @foreach ($producto as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre"
                                class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input value="{{old('nombre', $movimientoDetalle->nombre ?? '')}}" type="text" name="nombre" class="form-control" id="nombre"
                                    placeholder="Escriba el nombre del movimiento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cantidad"
                                class="col-sm-3 text-end control-label col-form-label">Cantidad </label>
                            <div class="col-sm-9">
                                <input value="{{old('cantidad', $movimientoDetalle->cantidad ?? '')}}" type="text" name="cantidad" class="form-control" id="cantidad"
                                    placeholder="Escriba la cantidad del movimiento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="valor"
                                class="col-sm-3 text-end control-label col-form-label">Valor</label>
                            <div class="col-sm-9">
                                <input value="{{old('valor', $movimientoDetalle->valor ?? '')}}" type="text" name="valor" class="form-control" id="valor"
                                    placeholder="Escriba el valor del movimiento">
                            </div>
                        </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-success text-white">Actualizar</button>
                        </div>
                    </div>
        @endsection
