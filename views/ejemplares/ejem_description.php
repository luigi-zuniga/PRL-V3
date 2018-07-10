<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Portal de recomendaciones">

    <link href="../../resources/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Fuentes -->
    <link href="../../resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:300,700|Oswald:400,500,700" rel="stylesheet">
    <!-- Tema Personalizado CSS -->
    <link href="../../resources/css/portal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php
        include("../../shared/nav.php");
    ?>
    <section id="ejemplar" class="" style="margin-top:120px;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading">Título del libro en uno o dos reglones. Título del libro en uno o dos reglones. Título del libro en uno o dos reglones</h2>
                </div>

                    <div class="col-lg-3" style="margin-bottom:20px;">
                        <img class="img-responsive img-centered" src="../../resources/img/book-portada.jpg" alt="">
                        <label for="">Autor</label>
                        <p>Nombre_del_autor_de_uno_a__ dos_reglones.</p>
                        <label for="">Publicado en</label>
                        <br/>
                        <br/>
                        <label class="label label-default">Año 2015</label>
                    </div>

                 <div class="col-lg-6">
                        <ul class="nav nav-tabs">
					        <li class="active"><a href="#ejem_recomedacion" data-toggle="tab">Información General</a></li>
					        <li><a href="#ejem_descripcion" data-toggle="tab">Descripción Fisica</a></li>
				        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="ejem_recomedacion">
                                <label>Editorial</label>
                                <p>Nombre_del_editorial_de_uno_a__dos_reglones.</p>
                                <label>Reseña</label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius elit at condimentum ﬁnibus. Fusce lacinia mi libero, eget sagittis risus consectetur a. Vivamus suscipit turpis a laoreet posuere. Fusce tristique vitae sapien non maximus. Vestibulum</p>
                                <label>Argumento</label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius elit at condimentum ﬁnibus. Fusce lacinia mi libero, eget sagittis risus consectetur a. Vivamus suscipit turpis a laoreet posuere. Fusce tristique vitae sapien non maximus. Vestibulum at lorem pellentesque, aliquam neque sit amet, volutpat risus. Vestibulum quis eleifend massa. Vestibulum accumsan consectetur lacus cursus iaculis. Pellentesque eget ipsum in odio mollis scelerisque vitae nec nisl. Sed felis odio, gravida ac sem non, blandit consectetur urna. Maecenas et molestie arcu.</p>
                            </div>
                            <div class="tab-pane" id="ejem_descripcion">
                                <label>Nº de páginas: </label>
                                <p>345</p>
                                <label>Ancho</label>
                                <p>231mm</p>
                                <label>Alto</label>
                                <p>231mm</p>
                                <label>Profuncidad</label>
                                <p>231mm</p>
                            </div>
                        </div>
                     </div>

                    <div class="col-lg-3">
                            <label for="">Público:</label>
                            <br/>
                            <label class="label label-primary">Jovenes</label>&nbsp;<label class="label label-primary">Adultos</label>
                            <br/>
                            <br/>
                            <label for="">Temas:</label>
                            <br/>
                            <label class="label label-primary">Ciencia y Tecnología</label>
                            <br/>
                            <br/>
                            <label for="">Materias:</label>
                            <br/>
                            <label class="label label-primary">Astronomía</label>
                            <br/>
                            <br/>
                            <label for="">ISBN:</label>
                            <br/>
                            <label class="label label-info">1-4028-9462-7</label>
                            <br/>
                            <br/>
                            <label for="">Nº Sistema:</label>
                            <br/>
                            <label class="label label-info">4028</label>
                            <br/>
                            <br/>
                            <label for="">ID Consejo Marco:</label>
                            <br/>
                            <label class="label label-info">94629462</label>
                            <br/>
                            <br/>
                        </div>  
                    </div>
        </div>
                

        </div>
    </section>

     <section class="box-recomendaciones">
        <div class="container">
            <!--Header Recomendaciones-->
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h4 class="section-heading">Es parte de las siguiente recomendaciones:</h4>
                </div>
            </div>
            <!-- end Header Recomendaciones-->

            <div class="row"> <!--Paneles Recomendaciones-->
                <!--fila-->
                <div id="recomendaciones-panel">
                    <!--Recomendaciones Panel contenido-->
                    <div class="col-md-9 recomendaciones-item">
                        <a href="#" class="recomendaciones-link">
                            <div class="panel">
                                <div class="panel-body">
                                        <div class="recomendaciones-hover">
                                                <div class="recomendaciones-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                               </div>
                                           </div>
                                    <h4>Título del set de recomendaciones de uno hasta tres reglones en la vista previa del</h4>
                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                        inventore harum ex magni, dicta impedit.</small>
                                    <div class="container">
                                        <div class="row">
                                            <div class="footer-recomedacion">
                                                <label class="label label-default">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-book fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end Recomendaciones Panel contendo-->


                    <!--Recomendaciones Panel contenido-->
                    <div class="col-md-9 recomendaciones-item">
                            <a href="#" class="recomendaciones-link">
                                <div class="panel">
                                    <div class="panel-body">
                                            <div class="recomendaciones-hover">
                                                    <div class="recomendaciones-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                   </div>
                                               </div>
                                        <h4>Título del set de recomendaciones de uno hasta tres reglones en la vista previa del</h4>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                            inventore harum ex magni, dicta impedit.</small>
                                        <div class="container">
                                            <div class="row">
                                                <div class="footer-recomedacion">
                                                    <label class="label label-default">Año: 2015</label>
                                                    <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                    <i class="fa fa-book fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--end Recomendaciones Panel contendo-->
                </div>
                <!--end fila-->
            </div><!--end Panel Recomendaciones-->
        </div>
    </section>



    <section class="box-recomendaciones">
        <div class="container">
            <!--Header Recomendaciones-->
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h4 class="section-heading">Comites que han recomendado este título:</h4>
                </div>
            </div>
            <!-- end Header Recomendaciones-->

            <div class="row"> <!--Paneles Recomendaciones-->
                <!--fila-->
                <div id="recomendaciones-panel">
                    <!--Recomendaciones Panel contenido-->
                    <div class="col-md-9 recomendaciones-item">
                        <a href="#" class="recomendaciones-link">
                            <div class="panel">
                                <div class="panel-body">
                                        <div class="recomendaciones-hover">
                                                <div class="recomendaciones-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                               </div>
                                           </div>
                                    <h4>Título del comité de uno hasta tres reglones en la vista previa del set.</h4>
                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                        inventore harum ex magni, dicta impedit.</small>
                                    <div class="container">
                                        <div class="row">
                                            <div class="footer-recomedacion">
                                                <label class="label label-default">Año: 2015</label>
                                                <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                <i class="fa fa-users fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end Recomendaciones Panel contendo-->


                    <!--Recomendaciones Panel contenido-->
                    <div class="col-md-9 recomendaciones-item">
                            <a href="#" class="recomendaciones-link">
                                <div class="panel">
                                    <div class="panel-body">
                                            <div class="recomendaciones-hover">
                                                    <div class="recomendaciones-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                   </div>
                                               </div>
                                        <h4>Título del comité de uno hasta tres reglones en la vista previa del set.</h4>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                            inventore harum ex magni, dicta impedit.</small>
                                        <div class="container">
                                            <div class="row">
                                                <div class="footer-recomedacion">
                                                    <label class="label label-default">Año: 2015</label>
                                                    <small><strong>Comité:</strong> Nombre_del_comité_encargado</small>
                                                    <i class="fa fa-users fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--end Recomendaciones Panel contendo-->
                </div>
                <!--end fila-->
            </div><!--end Panel Recomendaciones-->
        </div>
    </section>




    <!-- jQuery -->
    <script src="../../resources/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../resources/js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../resources/js/portal.js"></script>
</body>
</html>