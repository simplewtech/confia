<form action="{{ $ruta }}" method="post">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-outline btn-sm box bg-danger acciones_button"><i class=""
            data-bs-dismiss="modal" aria-label="Close"><i class="icono fas fa-trash-alt"
                style="color: white; font-size:1.5rem"></i></button>
</form>
