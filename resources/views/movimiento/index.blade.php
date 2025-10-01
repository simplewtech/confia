@extends('layouts.app')
@section('contenido')
@if ($mensaje = session('mensaje'))
    <div class="alert alert-success d-flex flex-column mb-3">
        <div class="p-2"><h4>{{$mensaje}}</h4></div>
      </div>
@endif
@section('titulo')
Movimientos
@endsection
<div class="card rounded-1">
    <div class="card-header bg-info text-white">
        <div class="card-toolbar">
            <h3 class="card-title fw-bold"><i class="fas fa-folder-open pe-2 fs-2"></i>Movimiento</h3>
            <a href="{{ route('movimiento.create') }}" class="btn btn-success ms-3 fw-bolder text-white"><i class="fas fa-plus-circle fs-4 me-1"></i>Nuevo Registro</a>
        </div>
    </div>
<div class="card-body rounded-1">
        <div class="table-responsive border pt-3 pb-3">
            <table id="tabla_dinamica" class="table table-striped table-bordered border-top border-bottom align-middle pe-0 pl-0 me-0 ml-0">
                <thead class="fw-bold fs-5">
                    <tr>
                        <th>Tipo movimiento ID</th>
                        <th>Persona ID</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th class="w-30px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->tipo_movimiento_id}}</td>
                            <td>{{$data->persona_id}}</td>
                            <td>{{$data->nombre}}</td>
                            <td>{{$data->fecha}}</td>
                            <td>
                                <div class="container text-center acciones">
                                    <a class="btn btn-sm btn-outline box bg-success acciones_button" href="{{route('movimiento.edit', $data->id)}}"><i class=" fas fa-pencil-alt" style="color:white; font-size:1.5rem"></i></a>
                                    <form action="{{ route('movimiento.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-sm btn-outline box bg-danger acciones_button"><i class="fas fa-trash-alt" style="color: white; font-size:1.5rem"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade modal-fullscreen-md-down" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Empresa Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($datas as $data)
                    <ul>
                        <li>{{$data->nombre}}</li>
                        <li>{{$data->nit}}</li>
                        <li>{{$data->regimen}}</li>
                        <li>{{$data->representante_legal}}</li>
                        <li>{{$data->documento_representante_legal}}</li>
                        <li>{{$data->direccion}}</li>
                        <li>{{$data->telefono}}</li>
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
