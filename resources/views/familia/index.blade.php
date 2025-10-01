@extends('layouts.app')
@section('contenido')
    @if ($mensaje = session('mensaje'))
        <div class="alert alert-success d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $mensaje }}</h4>
            </div>
        </div>
    @endif
@section('titulo')
    Familias
@endsection
<div class="card rounded-1">
    <div class="card-header bg-info text-white">
        <div class="card-toolbar">
            <h3 class="card-title fw-bold"><i class=" fas fa-dolly-flatbed pe-2 fs-2"></i>Familias</h3>
            <a href="{{ route('familia.create') }}" class="btn btn-success ms-3 fw-bolder text-white" role="button"><i
                    class="fas fa-plus-circle fs-4 me-1"></i>Nuevo Registro</a>
        </div>
    </div>
    <div class="card-body rounded-1">
        <div class="table-responsive border pt-3 pb-3">
            <table id="tabla_dinamica"
                class="table table-striped table-bordered border-top border-bottom align-middle pe-0 pl-0 me-0 ml-0">
                <thead class="fw-bold fs-5">
                    <tr>
                        <th>Nombre</th>
                        <th class="no-sort no-search w-30px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->nombre }}</td>
                            <td>
                                <div class="container text-center acciones">
                                    <a class="btn btn-sm btn-outline box bg-success acciones_button"
                                        href="{{ route('familia.edit', $data->id) }}" role="button"><i
                                            class="icono fas fa-pencil-alt"
                                            style="color:white; font-size:1.5rem"></i></a>
                                    <form action="{{ route('familia.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-outline btn-sm box bg-danger acciones_button"><i
                                                class="icono fas fa-trash-alt"
                                                style="color: white; font-size:1.5rem"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>
@endsection
