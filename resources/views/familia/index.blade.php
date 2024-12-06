@extends('layouts.app')
@section('contenido')
@if ($mensaje = session('mensaje'))
    <div class="alert alert-success d-flex flex-column mb-3">
        <div class="p-2"><h4>{{$mensaje}}</h4></div>
      </div>
@endif
@section('titulo')
Familias
@endsection
<div class="row">
    <div class="card-header">
        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-info" href="{{route('familia.create')}}" role="button">Nuevo Registro</a>
        </div>
        <div class="d-md-flex justify-content-md-end justify-content-lg-end p-t-10">
            <a class="btn btn-info" href="{{route('familia.create')}}" role="button">Nuevo Registro</a>
        </div>
        <h5 class="card-title">Familias</h5>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla_dinamica" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->nombre }}</td>
                                <td>
                                    <div class="container text-center">
                                        <div class="row justify-content-md-end">
                                            <div class="col col-lg-1">
                                                <a class="btn btn-sm btn-outline" href="{{route('familia.edit', $data->id)}}" role="button"><i class=" fas fa-pencil-alt" style="color:blue; font-size:1.5rem"></i></a>
                                            </div>

                                        <div class="col col-lg-1">
                                            <form action="{{ route('familia.destroy', $data->id) }}" method="post">
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
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
