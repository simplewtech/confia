@extends('layouts.app')
@section('contenido')
@if ($mensaje = session('mensaje'))
    <div class="alert alert-success d-flex flex-column mb-3">
        <div class="p-2"><h4>{{$mensaje}}</h4></div>
      </div>
@endif
@section('titulo')
Tipo Personas
@endsection
<div class="row">
    <div class="d-md-flex justify-content-md-end">
        <a class="btn btn-dark" href="{{route('tipo-personas.create')}}" role="button">Nuevo Registro</a>
    </div>
        <div class="card-body">
            <h5 class="card-title">Tipo Personas</h5>
            <div class="table-responsive">
                <table id="tabla_dinamica" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->nombre}}</td>
                                <td>
                                    <div class="container text-center">
                                        <div class="row justify-content-md-end">
                                            <div class="col col-lg-1">
                                                    <button type="button" class="btn btn-outline btn-sm g-col-4 align-middle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <iconify-icon icon="mdi:edit-box" style="color: blue; font-size:2rem"></iconify-icon>
                                                    </button>
                                            </div>

                                        <div class="col col-lg-1">
                                            <form action="{{ route('tipo-movimientos.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline btn-sm g-col-4"><iconify-icon icon="mdi:delete" style="color: #ff2600; font-size:2rem" ></iconify-icon></button>
                                            </form>
                                        </div>
                                    </div>
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
