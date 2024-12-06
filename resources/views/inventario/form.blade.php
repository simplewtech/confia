@extends('layouts.app')
@section('contenido')
@error('productos_id')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror
@error('saldo')
<div class="alert alert-danger d-flex flex-column mb-3">
    <div class="p-2"><h4>{{$message}}</h4></div>
  </div>
@enderror

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-danger text-white me-md-2" href="{{route('inventario.index')}}" role="button">Cancelar</a>
                </div>
                <h4 class="card-title">Crear nuevo Inventario</h4>
            </div>
            <form class="form-horizontal" action="{{ route('inventario.store') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="producto_id"
                            class="col-sm-3 text-end control-label col-form-label">Producto</label>
                        <div class="col-sm-9">
                            <select name="producto_id" class="form-control" id="producto_id">
                                <option value="">Asigna un producto al inventario</option>
                                @foreach ($producto as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="saldo"
                                class="col-sm-3 text-end control-label col-form-label">Saldo</label>
                            <div class="col-sm-9">
                                <input type="text" name="saldo" class="form-control" id="saldo"
                                    placeholder="Escriba el saldo">
                            </div>
                        </div>
                <div class="border-top">
                    <div class="card-body d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success text-white">Crear</button>
                    </div>
                </div>
            </form>
        </div>
@endsection
