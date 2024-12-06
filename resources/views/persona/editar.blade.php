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
                <div class="card-header">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-danger me-md-2 text-white" href="{{route('persona.index')}}" role="button">Cancelar</a>
                    </div>
                    <h4 class="card-title">Editar persona: {{$persona->nombre}}</h4>
                </div>
                <form class="form-horizontal" action="{{ route('persona.update', $persona) }}"  method="POST">
                    @csrf @method('put')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="tipo_persona_id"
                                class="col-sm-3 text-end control-label col-form-label">Tipo persona</label>
                            <div class="col-sm-9">
                                <select name="tipo_persona_id" class="form-control" id="tipo_persona_id">
                                    <option value="{{old('tipo_persona_id', $persona->tipo_persona_id ?? '')}}"></option>
                                    @foreach ($tipo_persona as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre"
                                class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nombre', $persona->nombre ?? '') }}" type="text" name="nombre" class="form-control" id="nombre"
                                    placeholder="Escriba el nombre de la persona">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido"
                                class="col-sm-3 text-end control-label col-form-label">Apellido</label>
                            <div class="col-sm-9">
                                <input value="{{old('apellido', $persona->apellido ?? '')}}" type="text" name="apellido" class="form-control" id="apellido"
                                    placeholder="Escriba el apellido de la persona">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="documento"
                                class="col-sm-3 text-end control-label col-form-label">Documento </label>
                            <div class="col-sm-9">
                                <input value="{{old('documento', $persona->documento ?? '')}}" type="text" name="documento" class="form-control" id="documento"
                                    placeholder="Escriba el documento de la persona">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celular" class="col-sm-3 text-end control-label col-form-label">Celular <small class="text-muted">(999) 999-9999</small></label>
                            <div class="col-sm-9">
                                <input value="{{old('celular', $persona->celular ?? '')}}" type="number" class="form-control phone-inputmask" id="celular" name="celular" placeholder="Escriba su número de celular">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input value="{{old('email', $persona->email ?? '')}}" type="email" name="email" class="form-control" id="email"
                                    placeholder="Escriba el email de la persona">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"
                                class="col-sm-3 text-end control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input {{old('password', $persona->password ?? '')}} type="password" name="password" class="form-control" id="password"
                                    placeholder="Escriba el password de la persona">
                            </div>
                        </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-success text-white">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        @endsection
