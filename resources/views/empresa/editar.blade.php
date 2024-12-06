@extends('layouts.app')
@section('contenido')
    @error('nombre')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('nombre')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('nit')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('regimen')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('representante_legal')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('documento_representante_legal')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('direccion')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('telefono')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="{{ route('empresa.update', $empresa) }}" method="POST">
                    @csrf @method('put')
                    <div class="card-header">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-danger text-white me-md-2" href="{{route('empresa.index')}}" role="button">Cancelar</a>
                        </div>
                            <h4 class="card-title">Editar empresa: {{$empresa->nombre}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombre"
                                class="col-sm-3 text-end control-label col-form-label requerido">Nombre</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nombre', $empresa->nombre ?? '') }}" type="text" name="nombre" class="form-control" id="nombre"
                                    placeholder="Escriba el nombre de la empresa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nit"
                                class="col-sm-3 text-end control-label col-form-label requerido">Nit</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nit', $empresa->nit ?? '') }}" type="number" name="nit"
                                    class="form-control" id="nit" placeholder="Escriba el Nit de la empresa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="regimen"
                                class="col-sm-3 text-end control-label col-form-label requerido">Regimen</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nombre', $empresa->regimen ?? '') }}" type="text" name="regimen" class="form-control" id="regimen"
                                    placeholder="Escriba el regimen de la empresa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="representante_legal"
                                class="col-sm-3 text-end control-label col-form-label requerido">Representante Legal</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nombre', $empresa->representante_legal ?? '') }}" type="text" name="representante_legal" class="form-control"
                                    id="representante_legal" placeholder="Escriba el nombre del representante legal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="documento_representante_legal"
                                class="col-sm-3 text-end control-label col-form-label requerido">Documento Representante
                                Legal</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nombre', $empresa->documento_representante_legal ?? '') }}" type="number" name="documento_representante_legal" class="form-control"
                                    id="documento_representante_legal" placeholder="Escriba el Documento del Representante">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion"
                                class="col-sm-3 text-end control-label col-form-label requerido">Dirección</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nombre', $empresa->direccion ?? '') }}" type="text" name="direccion" class="form-control" id="direccion"
                                    placeholder="Escriba la dirección de la empresa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefono"
                                class="col-sm-3 text-end control-label col-form-label requerido">Teléfono</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nombre', $empresa->telefono ?? '') }}" type="number" name="telefono" class="form-control" id="telefono"
                                    placeholder="Escriba el Teléfono de la empresa">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body d-md-flex justify-content-md-end">
                            <input type="hidden" name="id" value="{{ $empresa->id }}">
                            <button type="submit" class="btn btn-success text-white">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        @endsection
