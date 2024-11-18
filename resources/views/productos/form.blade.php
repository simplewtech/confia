@extends('layouts.app')
@section('contenido')
    @error('familias_id')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('ubicaciones_id')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('nombre')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('codigo')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('valor_compra')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('valor_venta')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    @error('iva')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="{{ route('productos.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Crear nuevo Producto</h4>
                        <div class="form-group row">
                            <label for="familias_id" class="col-sm-3 text-end control-label col-form-label">Familia</label>
                            <div class="col-sm-9">
                                <select name="familias_id" class="form-control" id="familias_id">
                                    <option value="">Selecciona una familia</option>
                                    @foreach ($familias as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ubicaciones_id"
                                class="col-sm-3 text-end control-label col-form-label">Ubicación</label>
                            <div class="col-sm-9">
                                <select name="ubicaciones_id" class="form-control" id="ubicaciones_id">
                                    <option value="">Selecciona una Ubicación</option>
                                    @foreach ($ubicaciones as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="nombre" class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" class="form-control" id="nombre"
                                        placeholder="Escriba el nombre del producto">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="codigo" class="col-sm-3 text-end control-label col-form-label">Código</label>
                            <div class="col-sm-9">
                                <input type="text" name="codigo" class="form-control" id="codigo"
                                    placeholder="Escriba el código del producto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="valor_compra" class="col-sm-3 text-end control-label col-form-label">Valor
                                Compra</label>
                            <div class="col-sm-9">
                                <input type="number" name="valor_compra" class="form-control" id="valor_compra"
                                    placeholder="Escriba el valor de la compra">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="valor_venta" class="col-sm-3 text-end control-label col-form-label">Valor
                                Venta</label>
                            <div class="col-sm-9">
                                <input type="text" name="valor_venta" class="form-control" id="valor_venta"
                                    placeholder="Escriba el valor de la venta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="iva" class="col-sm-3 text-end control-label col-form-label">Iva</label>
                            <div class="col-sm-9">
                                <input type="number" name="iva" class="form-control" id="iva"
                                    placeholder="Escriba el valor del iva">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-dark">Guardar</button>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-dark me-md-2" href="{{ route('productos.index') }}" role="button">Volver al
                            listado</a>
                    </div>
                </form>
            </div>
        @endsection
