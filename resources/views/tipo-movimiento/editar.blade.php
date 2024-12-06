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
                        <a class="btn btn-danger me-md-2 text-white" href="{{route('tipo-movimiento.index')}}" role="button">Cancelar</a>
                    </div>
                    <h4 class="card-title">Editar Tipo Movimiento: {{$tipoMovimiento->nombre}}</h4>
                </div>
                <form class="form-horizontal" action="{{ route('tipo-movimiento.update', $tipoMovimiento) }}"  method="POST">
                    @csrf @method('put')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombre"
                                class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input value="{{old('nombre', $tipoMovimiento->nombre)}}" type="text" name="nombre" class="form-control" id="nombre"
                                    placeholder="Escriba el nombre del nuevo movimiento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="suma"
                                class="col-sm-3 text-end control-label col-form-label">Suma</label>
                            <div class="col-sm-9">
                                <input value="{{old('suma', $tipoMovimiento->suma)}}" type="number" name="suma" class="form-control" id="suma"
                                    placeholder="Escriba la suma del movimiento">
                            </div>
                        </div>
                        </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-success text-white">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        @endsection
