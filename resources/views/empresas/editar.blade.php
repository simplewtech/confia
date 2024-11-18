<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar registro: {{$data->nombre}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="{{ route('empresas.store') }}"  method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nombre"
                            class="col-sm-3 text-end control-label col-form-label required">Nombre*</label>
                        <div class="col-sm-9">
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                placeholder="Escriba el nombre de la empresa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nit"
                            class="col-sm-3 text-end control-label col-form-label">Nit</label>
                        <div class="col-sm-9">
                            <input type="number" name="nit" class="form-control" id="nit"
                                placeholder="Escriba el Nit de la empresa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="regimen"
                            class="col-sm-3 text-end control-label col-form-label">Regimen</label>
                        <div class="col-sm-9">
                            <input type="text" name="regimen" class="form-control" id="regimen"
                                placeholder="Escriba el regimen de la empresa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="representante_legal"
                            class="col-sm-3 text-end control-label col-form-label">Representante Legal</label>
                        <div class="col-sm-9">
                            <input type="text" name="representante_legal" class="form-control" id="representante_legal"
                                placeholder="Escriba el nombre del representante legal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="documento_representante_legal"
                            class="col-sm-3 text-end control-label col-form-label">Documento Representante Legal</label>
                        <div class="col-sm-9">
                            <input type="number" name="documento_representante_legal" class="form-control" id="documento_representante_legal"
                                placeholder="Escriba el Documento del Representante">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion"
                            class="col-sm-3 text-end control-label col-form-label">Dirección</label>
                        <div class="col-sm-9">
                            <input type="text" name="direccion" class="form-control" id="direccion"
                                placeholder="Escriba la dirección de la empresa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono"
                            class="col-sm-3 text-end control-label col-form-label">Teléfono</label>
                        <div class="col-sm-9">
                            <input type="number" name="telefono" class="form-control" id="telefono"
                                placeholder="Escriba el Teléfono de la empresa">
                        </div>
                    </div>
                    </div>
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
        </div>
    </div>
    </div>
</div>
