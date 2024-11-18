@extends('layouts.app')
@section('contenido')
@if ($mensaje = session('mensaje'))
    <div class="alert alert-success d-flex flex-column mb-3">
        <div class="p-2"><h4>{{$mensaje}}</h4></div>
      </div>
@endif
@section('titulo')
Productos
@endsection
<div class="row">
    <div class="d-md-flex justify-content-md-end">
        <a class="btn btn-dark" href="{{route('productos.create')}}" role="button">Nuevo Registro</a>
    </div>
        <div class="card-body">
            <h5 class="card-title">Productos</h5>
            <div class="table-responsive">
                <table id="tabla_dinamica" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Familias_ID</th>
                        <th>Ubicaciones_ID</th>
                        <th>Nombre</th>
                        <th>Codigo</th>
                        <th>Valor Venta</th>
                        <th>Valor Compra</th>
                        <th>Iva</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->familias_id}}</td>
                            <td>{{$data->ubicaciones_id}}</td>
                            <td>{{$data->nombre}}</td>
                            <td>{{$data->codigo}}</td>
                            <td>{{$data->valor_venta}}</td>
                            <td>{{$data->valor_compra}}</td>
                            <td>{{$data->iva}}</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row justify-content-md-end">
                                        <div class="col col-lg-2">
                                                <button type="button" class="btn btn-outline btn-sm g-col-4 align-middle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <iconify-icon icon="mdi:edit-box" style="color: blue; font-size:2rem"></iconify-icon>
                                                </button>
                                        </div>

                                    <div class="col col-lg-2">
                                        <form action="{{ route('productos.destroy', $data->id) }}" method="post">
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
                </tfoot>
            </table>
        </div>

    </div>
</div>
@endsection
