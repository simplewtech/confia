@extends('layouts.app')
@section('scripts')
    <script src="{{asset('assets/back/js/pages/producto/index.js')}}"></script>
@endsection
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
    <div class="card-header">
        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-info" href="{{route('producto.create')}}" role="button">Nuevo Registro</a>
        </div>
        <h5 class="card-title">Productos</h5>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla_dinamica" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Familia_ID</th>
                        <th>Ubicacion_ID</th>
                        <th>Nombre</th>
                        <th>Codigo</th>
                        <th>Valor Venta</th>
                        <th>Valor Compra</th>
                        <th>Iva</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->familia_id}}</td>
                            <td>{{$data->ubicacion_id}}</td>
                            <td id="modal-element">{{$data->nombre}}</td>
                            <td>{{$data->codigo}}</td>
                            <td>{{$data->valor_venta}}</td>
                            <td>{{$data->valor_compra}}</td>
                            <td>{{$data->iva}}</td>
                            <td>
                        <div class="container text-center">
                            <div class="row justify-content-md-end">
                                <div class="col col-lg-2">
                                    <a class="btn btn-sm btn-outline" href="{{route('producto.edit', $data->id)}}"><i class=" fas fa-pencil-alt" style="color:blue; font-size:1.5rem"></i></a>
                                </div>

                                <div class="col col-lg-2">
                                    <a class="btn btn-sm btn-outline" href="#" data-bs-toggle="modal" data-bs-target="#modal-producto" data-nombre="{{ $data->nombre }}" data-codigo="{{$data->codigo}}" role="button" id="botonmodal"><i class=" fas fa-eye" style="color:darkgoldenrod; font-size:1.5rem"></i></a>
                                </div>

                                <div class="col col-lg-2">
                                    <form action="{{ route('producto.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-outline btn-sm g-col-4"><i class="fas fa-trash-alt" style="color: red; font-size:1.5rem"></i></button>
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
<!-- Modal -->
<div class="modal fade modal-fullscreen-md-down" id="modal-producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-producto">Producto Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre: </span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="nombreproducto">
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Codigo: </span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="codigoproducto">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor: </span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="valorproducto">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cantidad: </span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="cantidadproducto">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Total: </span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="totalproducto">
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Cerrar</button>
            </div>
    </div>
    </div>
</div>
@endsection
