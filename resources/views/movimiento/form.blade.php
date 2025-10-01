<form class="form-horizontal" action="{{ route('movimiento.store') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group row">
            <label for="tipo_movimientos_id" class="col-sm-3 text-end control-label col-form-label">Tipo movimientos
                ID</label>
            <div class="col-sm-9">
                <select name="tipo_movimiento_id" class="form-control" id="tipo_movimiento_id">
                    <option value="">Selecciona un tipo de movimiento</option>
                    @foreach ($tipo_movimiento as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="persona_id" class="col-sm-3 text-end control-label col-form-label">Personas ID</label>
            <div class="col-sm-9">
                <select class="select2 form-select shadow-none" style="width: 100%; height:36px;" name="persona_id"
                    id="persona_id">
                    <option disabled selected>Selecciona una persona asignada al movimiento</option>
                    @foreach ($persona as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="nombre" class="col-sm-3 text-end control-label col-form-label">Nombre</label>
            <div class="col-sm-9">
                <input type="text" name="nombre" class="form-control" id="nombre"
                    placeholder="Escriba el nombre del movimiento">
            </div>
        </div>
        <div class="form-group row">
            <label for="fecha" class="col-sm-3 text-end control-label col-form-label">Fecha <small
                    class="text-muted">dd/mm/yyyy</small></label>
            <div class="col-sm-9">
                <input type="date" class="form-control date-inputmask" name="fecha" id="fecha"
                    placeholder="Escriba la fecha del movimiento">
            </div>
        </div>
        <div class="border-top">
            <div class="card-body d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-success text-white">Crear</button>
            </div>
        </div>
</form>
