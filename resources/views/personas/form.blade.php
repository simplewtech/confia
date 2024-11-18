@extends('layouts.app')
@section('contenido')
@error('tipo_personas_id')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('nombre')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('apellido')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('documento')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('celular')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('email')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('password')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('personas.store') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Crear nueva Persona</h4>
                    <div class="form-group row">
                        <label for="tipo_personas_id"
                            class="col-sm-3 text-end control-label col-form-label">Tipo persona</label>
                        <div class="col-sm-9">
                            <select name="tipo_personas_id" class="form-control" id="tipo_personas_id">
                                <option value="">Selecciona el tipo de persona</option>
                                @foreach ($tipo_personas as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombre"
                            class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="number" name="nombre" class="form-control" id="nombre"
                                placeholder="Escriba el nombre de la persona">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellido"
                            class="col-sm-3 text-end control-label col-form-label">Apellido</label>
                        <div class="col-sm-9">
                            <input type="text" name="apellido" class="form-control" id="apellido"
                                placeholder="Escriba el apellido de la persona">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="documento"
                            class="col-sm-3 text-end control-label col-form-label">Documento </label>
                        <div class="col-sm-9">
                            <input type="text" name="documento" class="form-control" id="documento"
                                placeholder="Escriba el documento de la persona">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="celular"
                            class="col-sm-3 text-end control-label col-form-label">Celular</label>
                        <div class="col-sm-9">
                            <input type="text" name="celular" class="form-control" id="celular"
                                placeholder="Escriba el celular de la persona">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email"
                            class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" id="email"
                                placeholder="Escriba el email de la persona">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password"
                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" name="password" class="form-control" id="password"
                                placeholder="Escriba el password de la persona">
                        </div>
                    </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-dark me-md-2" href="{{route('personas.index')}}" role="button">Volver al listado</a>
                </div>
            </form>
        </div>
@endsection
