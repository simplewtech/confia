// $(document).ready(function () {
//     $("#botonenviar").on("click", function (event) {
//         event.preventDefault();
//         const form = $("#formulario")[0];
//         const nombre = $("#nombre").val();
//         const representante_legal = $("#representante_legal").val();
//         const direccion = $("#direccion").val();
//         const telefono = $("#telefono").val();

//         if (
//             nombre == "" ||
//             representante_legal == "" ||
//             direccion == "" ||
//             telefono == ""
//         ) {
//             mostrarAlerta("llena todos los campos MEN", "error");
//             return; // corta la ejecucion del codigo
//         }

//         mostrarAlerta("mensaje enviado bien");

//         // enviar el formulario

//         form.submit();
//     });
//     const form = $("#formulario")[0];
//     function mostrarAlerta(mensaje, error = null) {
//         const alerta = document.createElement("P");
//         alerta.textContent = mensaje;

//         if (error) {
//             alerta.classList.add("form_error");
//         } else {
//             alerta.classList.add("form_correcto");
//         }

//         form.appendChild(alerta);

//         // desaparezca
//         setTimeout(() => {
//             alerta.remove();
//         }, 5000);
//     }
// });
