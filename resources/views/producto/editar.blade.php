@extends('layouts.app')
@section('contenido')
    @error('nombre')
        <div class="alert alert-danger d-flex flex-column mb-3">
            <div class="p-2">
                <h4>{{ $message }}</h4>
            </div>
        </div>
    @enderror
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-danger me-md-2 text-white" href="{{route('producto.index')}}" role="button">Cancelar</a>
                    </div>
                    <h4 class="card-title">Editar producto: {{$producto->nombre}}</h4>
                </div>
                <form class="form-horizontal" action="{{ route('producto.update', $producto) }}"  method="POST">
                    @csrf @method('put')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="familias_id" class="col-sm-3 text-end control-label col-form-label">Familia</label>
                            <div class="col-sm-9">
                                <select name="familia_id" class="form-control" id="familia_id">
                                    <option value="{{old('familia_id', $producto->familia_id ?? '')}}">Selecciona una familia</option>
                                    @foreach ($familia as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ubicaciones_id"
                                class="col-sm-3 text-end control-label col-form-label">Ubicación</label>
                            <div class="col-sm-9">
                                <select name="ubicacion_id" class="form-control" id="ubicacion_id">
                                    <option value="{{old('ubicacion_id', $producto->ubicacion_id ?? '')}}">Selecciona una Ubicación</option>
                                    @foreach ($ubicacion as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="nombre" class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input value="{{old('nombre', $producto->nombre ?? '')}}" type="text" name="nombre" class="form-control" id="nombre"
                                        placeholder="Escriba el nombre del producto">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="codigo" class="col-sm-3 text-end control-label col-form-label">Código</label>
                            <div class="col-sm-9">
                                <input value="{{old('codigo', $producto->codigo ?? '')}}" type="text" name="codigo" class="form-control" id="codigo"
                                    placeholder="Escriba el código del producto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="valor_compra" class="col-sm-3 text-end control-label col-form-label">Valor Compra</label>
                            <div class="col-sm-9">
                                <input value="{{old('valor_compra', $producto->valor_compra ?? '')}}" type="number" name="valor_compra" class="form-control" id="valor_compra"
                                    placeholder="Escriba el valor de la compra">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="valor_venta" class="col-sm-3 text-end control-label col-form-label">Valor Venta</label>
                            <div class="col-sm-9">
                                <input value="{{old('valor_venta', $producto->valor_venta ?? '')}}" type="text" name="valor_venta" class="form-control" id="valor_venta"
                                    placeholder="Escriba el valor de la venta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="iva" class="col-sm-3 text-end control-label col-form-label">Iva</label>
                            <div class="col-sm-9">
                                <input value="{{old('iva', $producto->iva ?? '')}}" type="number" name="iva" class="form-control" id="iva"
                                    placeholder="Escriba el valor del iva">
                            </div>
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
