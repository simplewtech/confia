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
            <div class="card-header bg-secondary">
                <div class="card-toolbar">
                    <h3 class="card-title text-white fw-bold"><i class="fas fa-edit pe-2"></i>Editar ubicación: {{$ubicacion->nombre}}</h3>
                        <a class="btn btn-danger text-white me-md-2" href="{{route('ubicacion.index')}}" role="button">Cancelar</a>
                </div>
            </div>
                <form class="form-horizontal" action="{{ route('ubicacion.update', $ubicacion) }}"  method="POST">
                    @csrf @method('put')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nombre"
                                class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input value="{{old('nombre', $ubicacion->nombre)}}" type="text" name="nombre" class="form-control" id="nombre"
                                    placeholder="Escriba el nombre de la nueva ubicación">
                            </div>
                        </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end">
                            <input type="hidden" name="id" value="{{ $ubicacion->id }}">
                            <button type="submit" class="btn btn-success text-white">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        @endsection
