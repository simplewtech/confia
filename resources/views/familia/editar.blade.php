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
                        <a class="btn btn-danger me-md-2 text-white" href="{{route('familia.index')}}" role="button">Cancelar</a>
                    </div>
                    <h4 class="card-title">Editar Familia: {{$familia->nombre}}</h4>
                </div>
                <form class="form-horizontal" action="{{ route('familia.update', $familia) }}"  method="POST">
                    @csrf @method('put')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nombre"
                                class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input value="{{old('nombre', $familia->nombre ?? '')}}" type="text" name="nombre" class="form-control" id="nombre"
                                    placeholder="Escriba el nombre de la nueva ubicación">
                            </div>
                        </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end">
                            <input type="hidden" name="id" value="{{ $familia->id }}">
                            <button type="submit" class="btn btn-success text-white">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        @endsection
