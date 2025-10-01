<div class="form-group row">
    <label for="nombre" class="col-sm-3 text-end control-label col-form-label requerido">Nombre</label>
    <div class="col-sm-9">
        <input value="{{ old('nombre', $empresa->nombre ?? '') }}" type="text" name="nombre" class="form-control"
            id="nombre" placeholder="Escriba el nombre de la empresa">
    </div>
</div>
<div class="form-group row">
    <label for="nit" class="col-sm-3 text-end control-label col-form-label requerido">Nit</label>
    <div class="col-sm-9">
        <input value="{{ old('nit', $empresa->nit ?? '') }}" type="number" name="nit" class="form-control"
            id="nit" placeholder="Escriba el Nit de la empresa">
    </div>
</div>
<div class="form-group row">
    <label for="regimen" class="col-sm-3 text-end control-label col-form-label requerido">Regimen</label>
    <div class="col-sm-9">
        <input value="{{ old('nombre', $empresa->regimen ?? '') }}" type="text" name="regimen" class="form-control"
            id="regimen" placeholder="Escriba el regimen de la empresa">
    </div>
</div>
<div class="form-group row">
    <label for="representante_legal" class="col-sm-3 text-end control-label col-form-label requerido">Representante
        Legal</label>
    <div class="col-sm-9">
        <input value="{{ old('nombre', $empresa->representante_legal ?? '') }}" type="text"
            name="representante_legal" class="form-control" id="representante_legal"
            placeholder="Escriba el nombre del representante legal">
    </div>
</div>
<div class="form-group row">
    <label for="documento_representante_legal"
        class="col-sm-3 text-end control-label col-form-label requerido">Documento Representante
        Legal</label>
    <div class="col-sm-9">
        <input value="{{ old('nombre', $empresa->documento_representante_legal ?? '') }}" type="number"
            name="documento_representante_legal" class="form-control" id="documento_representante_legal"
            placeholder="Escriba el Documento del Representante">
    </div>
</div>
<div class="form-group row">
    <label for="direccion" class="col-sm-3 text-end control-label col-form-label requerido">Dirección</label>
    <div class="col-sm-9">
        <input value="{{ old('nombre', $empresa->direccion ?? '') }}" type="text" name="direccion"
            class="form-control" id="direccion" placeholder="Escriba la dirección de la empresa">
    </div>
</div>
<div class="form-group row">
    <label for="telefono" class="col-sm-3 text-end control-label col-form-label requerido">Teléfono</label>
    <div class="col-sm-9">
        <input value="{{ old('nombre', $empresa->telefono ?? '') }}" type="number" name="telefono" class="form-control"
            id="telefono" placeholder="Escriba el Teléfono de la empresa">
    </div>
</div>
