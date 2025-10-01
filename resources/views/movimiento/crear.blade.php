@extends('layouts.app')
@section('contenido')
    @error('tipo_movimientos_id')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('personas_id')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
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
                <div class="card-header bg-success">
                    <div class="card-toolbar">
                        <h3 class="card-title text-white text-center"><i class="fas fa-plus-circle pe-2"></i>Crear nuevo
                            Movimiento</h3>
                        <a class="btn btn-danger text-white me-md-2" href="{{ route('empresa.index') }}"
                            role="button">Volver al listado</a>
                    </div>
                </div>
                @include('movimiento.form')
            </div>
        </div>
    </div>
@endsection
