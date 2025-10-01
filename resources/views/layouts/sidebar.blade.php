<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html"
                        aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('empresa.index') }}" aria-expanded="false"><i class="far fa-building"></i><span
                            class="hide-menu">Empresas</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('ubicacion.index') }}" aria-expanded="false"><i
                            class="fas fa-map-marker-alt"></i><span class="hide-menu">Ubicaciones</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('familia.index') }}" aria-expanded="false"><i
                            class="fas fa-dolly-flatbed"></i><span class="hide-menu">Familias</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('movimiento.index') }}" aria-expanded="false"><i
                            class="far fa-folder-open"></i><span class="hide-menu">
                            Movimientos</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('tipo-movimiento.index') }}" aria-expanded="false"><i
                            class="far fa-chart-bar"></i><span class="hide-menu">
                            Tipo Movimientos</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('movimiento-detalle.index') }}" aria-expanded="false"><i
                            class="fas fa-chart-line"></i><span class="hide-menu">
                            Movimientos Detalles</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('persona.index') }}" aria-expanded="false"><i class="far fa-user"></i><span
                            class="hide-menu">
                            Personas</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('tipo-persona.index') }}" aria-expanded="false"><i
                            class="far fa-address-book"></i><span class="hide-menu">
                            Tipo Personas</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('producto.index') }}" aria-expanded="false"><i class="fas fa-boxes"></i><span
                            class="hide-menu">
                            Productos</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('inventario.index') }}" aria-expanded="false"><i
                            class="fas fa-clipboard-list"></i><span class="hide-menu">
                            Inventarios</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                            class="hide-menu">Authentication </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a>
                        </li>
                        <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span
                            class="hide-menu">Errors </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403
                                </span></a></li>
                        <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404
                                </span></a></li>
                        <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405
                                </span></a></li>
                        <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                    class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500
                                </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
