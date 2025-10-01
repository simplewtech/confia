@extends('layouts.app')
@section('scripts')
    <script src="{{ asset('assets/back/js/pages/producto/index.js') }}"></script>
@endsection
@section('contenido')
    @if ($mensaje = session('mensaje'))
        <div class="alert alert-success d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $mensaje }}</h4>
            </div>
        </div>
    @endif
@section('titulo')
    Empresas
@endsection

<div class="card rounded-1">
    <x-card-header tipo="list" titulo="Empresas" icono="fas fa-building fs-4 me-1" ruta="{{ route('empresa.create') }}"
        bg="bg-info" />
    <div class="card-body rounded-1">
        <div class="table-responsive border pt-3 pb-3">
            <table id="tabla_dinamica"
                class="table table-striped table-bordered border-top border-bottom align-middle pe-0 pl-0 me-0 ml-0">
                <thead class="fw-bold fs-5">
                    <tr>
                        <th>Nombre</th>
                        <th>Representante Legal</th>
                        <th>Direción</th>
                        <th>Teléfono</th>
                        <th class="no-sort no-search w-30px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#modal"
                                    role="button">{{ $data->nombre }}</a></td>
                            <td>{{ $data->representante_legal }}</td>
                            <td>{{ $data->direccion }}</td>
                            <td>{{ $data->telefono }}</td>
                            <td class="text-center acciones">
                                <x-boton-editar ruta="{{ route('empresa.edit', $data->id) }}" />
                                <x-boton-eliminar ruta="{{ route('empresa.destroy', $data->id) }}" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade modal-fullscreen-md-down" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Empresa Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($datas as $data)
                    <ul>
                        <li>{{ $data->nombre }}</li>
                        <li>{{ $data->nit }}</li>
                        <li>{{ $data->regimen }}</li>
                        <li>{{ $data->representante_legal }}</li>
                        <li>{{ $data->documento_representante_legal }}</li>
                        <li>{{ $data->direccion }}</li>
                        <li>{{ $data->telefono }}</li>
                    </ul>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
