// On document ready

$(document).ready(function () {
    $(document).on("click", "#botonmodal", function () {
        const nombre = $("#modal-element").data("nombre");
        //const codigo = $(this).data("codigo");
        $("#nombreproducto").val(nombre);
        // $("#codigoproducto").val(codigo);
    });

    $("#cantidadproducto").on("keyup", function () {
        const valor = $("#valorproducto").val();
        const cantidad = $("#cantidadproducto").val();
        const total = valor * cantidad;
        $("#totalproducto").val(total);
    });
});
