@extends('layouts.app')
@section('contenido')
@if ($errors->any())
    <div class="alert alert-danger d-flex flex-column mb-3">
        <div class="p-2">
            @foreach ($errors->all() as $message)
                <h4>{{ $message }}</h4>
            @endforeach
        </div>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-success">
                <div class="card-toolbar">
                    <h3 class="card-title text-white text-center"><i class="fas fa-plus-circle pe-2"></i>Crear nueva Familia</h3>
                    <a class="btn btn-danger text-white me-md-2" href="{{ route('familia.index') }}" role="button">Volver al listado</a>
                </div>
            </div>
                <form class="form-horizontal" action="{{ route('familia.store') }}"  method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombre"
                                class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" name="nombre" class="form-control" id="nombre"
                                    placeholder="Escriba el nombre de la nueva familia">
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
