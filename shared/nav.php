    <!-- Navegacion -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- barra de menu agrupada para dispositivos moviles -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menú
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="resources/img/PRL-logotipo-color-lg.png" class="img-responsive">Recomendaciones
                    <br/>de Lectura</a>
            </div>

            <!-- Enlaces y formulario -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form" role="search" action="/Portales/Views/Recomendaciones/recom_list_busq.php?">
                        <input type="text" class="form-control" placeholder="¿Buscas algo en particular?" />
                        <button id="btn-search" type="submit" class="btn btn-primary btn-sm">Buscar</button>
                    </form>
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/PRL-V3/">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/PRL-V3/views/Recomendaciones/recomendaciones.php">Recomendaciones</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/PRL-V3/views/Comites/comite.php">Comités</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/PRL-V3/views/Contacto/contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>