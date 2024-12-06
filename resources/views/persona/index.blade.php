@extends('layouts.app')
@section('contenido')
@if ($mensaje = session('mensaje'))
    <div class="alert alert-success d-flex flex-column mb-3">
        <div class="p-2"><h4>{{$mensaje}}</h4></div>
      </div>
@endif
@section('titulo')
Personas
@endsection
<div class="row">
    <div class="card-header">
        <div class="d-md-flex justify-content-md-end">
            <a class="btn btn-info" href="{{route('persona.create')}}" role="button">Nuevo Registro</a>
        </div>
        <h5 class="card-title">Personas</h5>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabla_dinamica" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Tipo personas ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->tipo_persona_id}}</td>
                            <td>{{$data->nombre}}</td>
                            <td>{{$data->apellido}}</td>
                            <td>{{$data->documento}}</td>
                            <td>{{$data->celular}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->password}}</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row justify-content-m">
                                        <div class="col col-lg-2">
                                            <a class="btn btn-sm btn-outline" href="{{route('persona.edit', $data->id)}}"><i class=" fas fa-pencil-alt" style="color:blue; font-size:1.5rem"></i></a>
                                        </div>

                                        <div class="col col-lg-2">
                                            <a class="btn btn-sm btn-outline" href="#" data-bs-toggle="modal" data-bs-target="#modal" role="button"><i class=" fas fa-eye" style="color:darkgoldenrod; font-size:1.5rem"></i></a>
                                        </div>

                                    <div class="col col-lg-2">
                                        <form action="{{ route('persona.destroy', $data->id) }}" method="post">
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
<div class="modal fade modal-fullscreen-md-down" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Persona Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($datas as $data)
                    <ul>
                        <li>{{$data->nombre}}</li>
                        <li>{{$data->tipo_persona_id}}</li>
                        <li>{{$data->nombre}}</li>
                        <li>{{$data->apellido}}</li>
                        <li>{{$data->documento}}</li>
                        <li>{{$data->celular}}</li>
                        <li>{{$data->email}}</li>
                        <li>{{$data->password}}</li>
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
