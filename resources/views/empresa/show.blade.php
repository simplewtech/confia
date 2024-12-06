
                            <div class="modal fade" id="modal-{{ $data->id }}" tabindex="-1"
                                aria-labelledby="modalLabel-{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content border-0 shadow-lg">
                                        <div class="modal-header bg-dark text-white">
                                            <h5 class="modal-title fw-bold" id="modalLabel-{{ $data->id }}">
                                                <i class="bi bi-building"></i> Detalles de {{ $data->nombre }}
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                aria-label="Cerrar"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="border p-3 rounded bg-light">
                                                        <h6 class="text-primary fw-semibold mb-3">
                                                            <i class="bi bi-card-list"></i> Información General
                                                        </h6>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="mb-2">
                                                                <strong class="text-dark">NIT:</strong> {{ $data->nit }}
                                                            </li>
                                                            <li class="mb-2">
                                                                <strong class="text-dark">Régimen:</strong>
                                                                {{ $data->regimen }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="border p-3 rounded bg-light">
                                                        <h6 class="text-primary fw-semibold mb-3">
                                                            <i class="bi bi-person-badge"></i> Contacto
                                                        </h6>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="mb-2">
                                                                <strong class="text-dark">Representante Legal:</strong>
                                                                {{ $data->representante_legal }}
                                                            </li>
                                                            <li class="mb-2">
                                                                <strong class="text-dark">Dirección:</strong>
                                                                {{ $data->direccion }}
                                                            </li>
                                                            <li class="mb-2">
                                                                <strong class="text-dark">Teléfono:</strong>
                                                                {{ $data->telefono }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer bg-light d-flex justify-content-end">
                                            <button type="button" class="btn btn-outline-dark rounded-pill"
                                                data-bs-dismiss="modal">
                                                <i class="bi bi-x-circle"></i> Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="2" class="text-muted">No hay empresas registradas.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

Form de empresas

@extends('layouts.app')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('empresa.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Crear nueva Empresa</h4>

                    {{-- Nombre --}}
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 text-end control-label col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escriba el nombre de la empresa">
                            @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- NIT --}}
                    <div class="form-group row mt-3">
                        <label for="nit" class="col-sm-3 text-end control-label col-form-label">NIT</label>
                        <div class="col-sm-9">
                            <input type="text" name="nit" class="form-control" id="nit" placeholder="Escriba el NIT de la empresa">
                            @error('nit')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Régimen --}}
                    <div class="form-group row mt-3">
                        <label for="regimen" class="col-sm-3 text-end control-label col-form-label">Régimen</label>
                        <div class="col-sm-9">
                            <input type="text" name="regimen" class="form-control" id="regimen" placeholder="Escriba el régimen de la empresa">
                            @error('regimen')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Representante Legal --}}
                    <div class="form-group row mt-3">
                        <label for="representante_legal" class="col-sm-3 text-end control-label col-form-label">Representante Legal</label>
                        <div class="col-sm-9">
                            <input type="text" name="representante_legal" class="form-control" id="representante_legal" placeholder="Escriba el nombre del representante legal">
                            @error('representante_legal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Documento Representante Legal --}}
                    <div class="form-group row mt-3">
                        <label for="documento_representante" class="col-sm-3 text-end control-label col-form-label">Documento Representante Legal</label>
                        <div class="col-sm-9">
                            <input type="number" name="documento_representante" class="form-control" id="documento_representante" placeholder="Escriba el documento del representante">
                            @error('documento_representante')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Dirección --}}
                    <div class="form-group row mt-3">
                        <label for="direccion" class="col-sm-3 text-end control-label col-form-label">Dirección</label>
                        <div class="col-sm-9">
                            <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Escriba la dirección de la empresa">
                            @error('direccion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Teléfono --}}
                    <div class="form-group row mt-3">
                        <label for="telefono" class="col-sm-3 text-end control-label col-form-label">Teléfono</label>
                        <div class="col-sm-9">
                            <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Escriba el teléfono de la empresa">
                            @error('telefono')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Botones --}}
                <div class="card-footer bg-transparent border-success">
                    <a class="btn btn-secondary" href="{{ route('empresa.index') }}">Volver al listado</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection





