<div class="menu">
<button class="btn btn-primary btn-dark mt-1 ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
aria-controls="offcanvas">
<span class="fas fa-bars"></span>
</button>
<!-- Contenido de off canvas  -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
<div class="offcanvas-header">
    <div class="container_claro">
        <img src="images/claro.png" class="logo_claro" alt="">
        <h5 class="offcanvas-title"> Producción</h5>
        </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="container">
    <section class="section-content py-3">
        <div class="row">
            <aside class="colum">
                <!-- ============= BARRA ============== -->
                <nav class="sidebar card py-2 mb-4">
                    <ul class="nav flex-column" id="nav_accordion">
                        <!-- ============= BUSQUEDA ============== -->
                        @include('Layouts.busqueda')
                        <!-- ============= SERVICIOS ============== -->
                        @include('Layouts.servicios')
                        <!-- ============= DASHBOARDS ============== -->
                        @include('Layouts.dashboards')
                        <!-- ============= LINKS ============== -->
                        @include('Layouts.links')
                        <!-- ============= ADMIN ============== -->
                        @include('Layouts.admin')
                    </ul>
                </nav>
                <!-- ============= COMPONENT END// ============== -->
            </aside>
        </div>
        <div class="nav-footer">
            <div class="nbre-usuario">
                @section('titulo')
                <i class="fa-regular fa-user"></i>
                <h5 class="offcanvas-title"> Usuario</h5>
                @endsection
                @yield('titulo')
            </div>
            <div>
                <button class="btn-logout" type="submit"><a class="nav-link" href="#">Logout</a></button>
            </div>
        </div>
    </section>
</div><!-- container //  -->
</div>
</div>