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
                        <h3 class="card-title text-white text-center"><i class="fas fa-plus-circle pe-2"></i>Crear nueva
                            Empresa</h3>
                        <a class="btn btn-danger text-white me-md-2" href="{{ route('empresa.index') }}"
                            role="button">Volver al listado</a>
                    </div>
                </div>
                <form id="formulario" class="form-horizontal" action="{{ route('empresa.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        @include('empresa.form')
                    </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end align-items-center">
                            <button type="submit" class="btn btn-success text-white" id="botonenviar">Crear</button>
                        </div>
                    </div>
            </div>
        </div>
    @endsection
