<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="orangetechnologycompany, product app manager, admin dashboard">
    <meta name="description" content="Product App Manager Online. Desarrollado por Orange Technology Company">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('titulo')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/back/images/favicon.png")}}">
    <!-- Custom CSS -->
    <link href="{{asset("assets/back/css/style.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/back/css/simplew.css")}}" rel="stylesheet">
    <link href="{{asset("assets/back/libs/datatables.net-bs4/css/dataTables.bootstrap4.css")}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.header')
    @include('layouts.sidebar')
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                @yield('contenido')
            </div>
            @include('layouts.footer')
</div>
</div>
    <!--JQuery-->
    <script src="{{asset("assets/back/libs/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset("assets/back/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/back/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset("assets/back/js/sidebarmenu.js")}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset("assets/back/js/custom.min.js")}}"></script>
    <script src="{{asset("assets/back/extra-libs/DataTables/datatables.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    <script>$('#tabla_dinamica').DataTable(
        {
    "language": {
        "processing":     "Procesando...",
        "search":         "Buscar&nbsp;:",
        "lengthMenu":    "Mostrar _MENU_ elementos",
        "info":           "Mostrando el elemento _START_ a _END_ de _TOTAL_ elementos",
        "infoEmpty":      "Mostrando el elemento 0 a 0 de 0 elementos",
        "infoFiltered":   "(filtrado de _MAX_ elementos en total)",
        "infoPostFix":    "",
        "loadingRecords": "Cargando...",
        "zeroRecords":    "No hay elementos para mostrar",
        "emptyTable":     "No hay datos disponibles en la tabla",
        "paginate": {
            "first":      "Primero",
            "previous":   "Anterior",
            "next":       "Siguiente",
            "last":       "Último"
        },
        "aria": {
            "sortAscending":  ": activar para ordenar la columna en orden ascendente",
            "sortDescending": ": activar para ordenar la columna en orden descendente"
        }
    }
}

    );</script>
</body>
</html>
