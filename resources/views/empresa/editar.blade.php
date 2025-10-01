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
            <div class="card rounded-full">
                <x-card-header tipo="form" titulo="Empresas" icono="fas fa-building fs-4 me-1"
                    ruta="{{ route('empresa.index') }}" bg="bg-secondary" />
                <form class="form-horizontal" action="{{ route('empresa.update', $empresa) }}" method="POST">
                    @csrf @method('put')
                    <div class="card-body">
                        @include('empresa.form')
                    </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end">
                            <input type="hidden" name="id" value="{{ $empresa->id }}">
                            <button type="submit" class="btn btn-success text-white">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
