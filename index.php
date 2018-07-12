<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Portal de recomendaciones">

    <title>Portal de Recomendaciones - Inicio</title>

    <!-- Bootstrap  CSS -->
    <link href="resources/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Fuentes -->
    <link href="resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:300,700|Oswald:400,500,700" rel="stylesheet">
    <!-- Tema Personalizado CSS -->
    <link href="resources/css/portal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <?php 
        include("shared/nav.php");
        include("shared/header.php");
    ?>
    
    <!-- Section Recomendaciones -->
    <section id="recomendaciones">
        <div class="container">
            <!--Header Recomendaciones-->
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading">Últimas Recomendaciones
                        <a href="/PRL-V3/views/Recomendaciones/recomendaciones.php" class="link-normal">Ver todas las recomendaciones</a>
                    </h2>
                </div>
            </div>
            <!-- end Header Recomendaciones-->

            <div class="row"> <!--Paneles Recomendaciones-->
                <!--fila-->
                <div id="recomendaciones-panel">
                    <!--Recomendaciones Panel contenido-->
                    <div class="col-md-6 recomendaciones-item">
                        <a href="#" class="recomendaciones-link">
                            <div class="panel">
                                <div class="panel-body">
                                        <div class="recomendaciones-hover">
                                                <div class="recomendaciones-hover-content">
                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                               </div>
                                           </div>
                                    <h4>Título del set de recomendaciones de uno hasta tres </h4>
                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                        inventore harum ex magni, dicta impedit.</small>
                                    <div class="container">
                                        <div class="row">
                                            <div class="footer-description">
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
                    <div class="col-md-6 recomendaciones-item">
                            <a href="#" class="recomendaciones-link">
                                <div class="panel">
                                    <div class="panel-body">
                                            <div class="recomendaciones-hover">
                                                    <div class="recomendaciones-hover-content">
                                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                   </div>
                                               </div>
                                        <h4>Título del set de recomendaciones de uno hasta tres </h4>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                            inventore harum ex magni, dicta impedit.</small>
                                        <div class="container">
                                            <div class="row">
                                                <div class="footer-description">
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




    <!-- Section Libros Recomendados -->
    <section id="ejemplar" class="bg-light-gray">  
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <h2 class="section-heading">Últimos Libros Recomendados
                        <a href="/PRL-V3/views/ejemplares/ejemplares.php" class="link-normal">Ver todos los libros</a>
                    </h2>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                         <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                              <div class="ejemplar-hover">
                                 <div class="ejemplar-hover-content">
                                     <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                </div>
                            </div>
                            <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                            <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                            <label class="label label-default portafolio-publicacion">Año: 2015</label>
                            </a>
                        <div class="ejemplar-caption">
                             <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                             <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                            <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                 <div class="ejemplar-hover">
                                    <div class="ejemplar-hover-content">
                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                   </div>
                               </div>
                               <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                               <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                               <label class="label label-default portafolio-publicacion">Año: 2015</label>
                               </a>
                           <div class="ejemplar-caption">
                                <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                           </div>
                       </div>



                       <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                            <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                 <div class="ejemplar-hover">
                                    <div class="ejemplar-hover-content">
                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                   </div>
                               </div>
                               <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                               <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                               <label class="label label-default portafolio-publicacion">Año: 2015</label>
                               </a>
                           <div class="ejemplar-caption">
                                <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                           </div>
                       </div>


                       <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                            <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                 <div class="ejemplar-hover">
                                    <div class="ejemplar-hover-content">
                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                   </div>
                               </div>
                               <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                               <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                               <label class="label label-default portafolio-publicacion">Año: 2015</label>
                               </a>
                           <div class="ejemplar-caption">
                                <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                           </div>
                       </div>



                       <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                            <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                 <div class="ejemplar-hover">
                                    <div class="ejemplar-hover-content">
                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                   </div>
                               </div>
                               <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                               <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                               <label class="label label-default portafolio-publicacion">Año: 2015</label>
                               </a>
                           <div class="ejemplar-caption">
                                <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                           </div>
                       </div>



                       <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ejemplar-item">
                            <a href="#ejemplarModal1" class="ejemplar-link" data-toggle="modal">
                                 <div class="ejemplar-hover">
                                    <div class="ejemplar-hover-content">
                                        <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                   </div>
                               </div>
                               <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                               <img src="resources/img/book-portada.jpg" class="img-responsive" alt="">
                               <label class="label label-default portafolio-publicacion">Año: 2015</label>
                               </a>
                           <div class="ejemplar-caption">
                                <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                                <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                           </div>
                       </div>
                     </div>
                </div>
    </section>


        <!-- Section Recomendaciones -->
        <section id="recomendaciones">
                <div class="container">
                    <!--Header Comites-->
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <h2 class="section-heading">Otros Comités
                                <a href="#" class="link-normal">Ver todos los comités</a>
                            </h2>
                        </div>

                        <div id="recomendaciones-panel">
                                <!--Recomendaciones Panel contenido-->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">
                                        <div class="panel">
                                            <div class="panel-body">
                                                    <div class="recomendaciones-hover">
                                                            <div class="recomendaciones-hover-content">
                                                                <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                           </div>
                                                       </div>
                                                <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                    inventore harum ex magni, dicta impedit.</small>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="footer-description">
                                                            <label class="label label-default">Año: 2015</label>
                                                            <i class="fa fa-users fa-2x"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">  
                                            <div class="panel">
                                                <div class="panel-body">
                                                        <div class="recomendaciones-hover">
                                                                <div class="recomendaciones-hover-content">
                                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                               </div>
                                                           </div>
                                                    <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                        inventore harum ex magni, dicta impedit.</small>
                                                    <div class="container">
                                                        <div class="row">    
                                                            <div class="footer-description">
                                                                <label class="label label-default">Año: 2015</label>
                                                                <i class="fa fa-users fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">  
                                            <div class="panel">
                                                <div class="panel-body">
                                                        <div class="recomendaciones-hover">
                                                                <div class="recomendaciones-hover-content">
                                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                               </div>
                                                           </div>
                                                    <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                        inventore harum ex magni, dicta impedit.</small>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="footer-description">
                                                                <label class="label label-default">Año: 2015</label>
                                                                <i class="fa fa-users fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recomendaciones-item">
                                    <a href="#comiteModal1" class="recomendaciones-link"  data-toggle="modal">  
                                            <div class="panel">
                                                <div class="panel-body">
                                                        <div class="recomendaciones-hover">
                                                                <div class="recomendaciones-hover-content">
                                                                    <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                                                               </div>
                                                           </div>
                                                    <h4>Título del comité de uno hasta tres reglones en la vista</h4>
                                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo
                                                        inventore harum ex magni, dicta impedit.</small>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="footer-description">
                                                                <label class="label label-default">Año: 2015</label>
                                                                <i class="fa fa-users fa-2x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                    </div>
                    <!-- end Header Comites-->
    
                </div>
            </section>






 




    <!--  Modal -->
    <!--  Modal 1 -->
    <div class="ejemplar-modal modal fade" id="ejemplarModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!--  Detalle -->
                                <h4>Título del libro en no más de uno o dos reglones, si no cabe se…</h4>
                                <p class="item-intro text-muted"><strong>De:</strong> Nombre_del_autor uno_a__dos_reglones_m-aximo.</p>
                                <img class="img-responsive img-centered" src="resources/img/book-portada.jpg" alt="" width="200px">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>
                                <ul class="list-inline">
                                    <li><strong>Publicado:</strong> Julio 2018</li>
                                    <li><strong>ISBN:</strong> 1-4028-9462-7</li>
                                    <li><strong>Materias: </strong> Astronomía</li>
                                </ul>
                                <a href="views/ejemplares/ejem_description.php" class="btn btn-default btn-block">
                                <i class="fa fa-plus"></i> Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Modal Comite-->
    <div class="ejemplar-modal modal fade" id="comiteModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!--  Detalle -->
                                <h4>Título_del_comité_en_un_reglón.</h4>
                                <img class="img-responsive img-centered" src="https://dummyimage.com/300x400/575757/e6e6ed.jpg" alt="" width="200px">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed sequi et possimus ducimus modi id totam est explicabo magnam excepturi. Dolores labore animi dolore nostrum odit. Sit, doloribus. Omnis, obcaecati!</p>
                                <a href="https://www.google.cl/?gws_rd=ssl" class="btn btn-default btn-block">
                                <i class="fa fa-plus"></i> Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- jQuery -->
    <script src="resources/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="shared/js/portal.js"></script>

</body>

</html>