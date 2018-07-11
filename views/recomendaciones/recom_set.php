<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Portal de recomendaciones">
    <title>Recomendaciones set - Portal de Recomendaciones</title>
    <link href="../../resources/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Fuentes -->
    <link href="../../resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:300,700|Oswald:400,500,700" rel="stylesheet">
    <!-- Tema Personalizado CSS -->
    <link href="../../resources/css/portal.css" rel="stylesheet">

    <!--Libreria select2-->
    <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css" rel="stylesheet">


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

    <section id="ejemplar" style="margin-top:120px;">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 text-center" style="margin-bottom:50px;">
                    <h2 class="section-heading">Título_set_de_recomendaciones</h2>
                    
                    <div class="col-lg-10">
                        <p class="text-left" style="padding-top:8px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quos, cupiditate nisi maxime quasi repellat odio fuga blanditiis iure quas delectus voluptate aut qui libero labore vitae rerum, minus veritatis, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quos, cupiditate nisi maxime quasi repellat odio fuga blanditiis iure quas delectus voluptate aut qui libero labore vitae rerum, minus veritatis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quos, cupiditate nisi maxime quasi repellat odio fuga blanditiis iure quas delectus voluptate aut qui libero labore vitae rerum, minus veritatis.
                        </p>
                    </div>
                    <div class="col-lg-2 text-right">
                        <h4>Recomendado por</h4>
                        <p>Nombre_del_Comité</p>
                        <h4>Año: 2019</h4>
                     </div>
                </div>

             <div class="col-lg-3 box-busqueda">
                     <form class="form-group" action="ejem_lista_busqueda.php">
                        <label class="control-label">Busca:</label>
                        <input class="form-control lead" name="" placeholder="¿Buscas algo en particular?" type="text">
                        <button type="submit" class="btn btn-primary btn-block">Buscar</button>
                        <br/>

                        <label class="control-label">Exportar:</label>
                        <a href="#" class="btn btn-block btn-success">Excel <i class="fa fa-file-excel-o"></i> </a>
                        <br/>
                        <!--Mensaje-->
                        <label>Filtrar:</label>
                        <p>Utiliza los filtros para refinar tu búsqueda.</p>
                        <!--Filtro por año-->
                        <label class="control-label">Año:</label>
                        <select class="form-control" id="filtroYear">
                            <option value="">Seleccione una Opción</option>
                        </select>
                        <br/>
                        <!--filtro por Area-->
                        <label class="control-label">Area:</label>
                        <select class="form-control" id="filtroRegion">
                            <option value="">Seleccione una Opción</option>
                        </select>

                        <div class="lead"></div>

                        <!--Filtro por materia-->
                        <label class="control-label">Materias:</label>
                        <select class="form-control js-source-states">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        </select>

                        <div class="lead"></div>

                        <!--Rango Etario-->
                        <label class="control-label">Rango Etario:</label>
                        <select class="js-rango-etario form-control" multiple="multiple">
                            <option value="">Público General</option>
                            <option value="">Infantil</option>
                            <option value="">Juvenil</option>
                            <option value="">Adulto</option>
                            <option value="">Adulto Mayor</option>
                        </select>
                        <div class="lead"></div>

                        <!-- Boton Aplicar-->
                        <button type="button" class="btn btn-primary btn-block">Aplicar</button>
                     </form>
 
            </div>

        
        
        
            
            
            <div class="col-lg-9">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ejemplar-item">
                     <a href="/PRL-V3/views/ejemplares/ejem_description.php" class="ejemplar-link" data-toggle="modal">
                         <div class="ejemplar-hover">
                             <div class="ejemplar-hover-content">
                                 <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                            </div>
                        </div>
                        <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                        <img src="/PRL-V3/resources/img/book-portada.jpg" class="img-responsive" alt="">
                        <label class="label label-default portafolio-publicacion">Año: 2015</label>
                    </a>
                    <div class="ejemplar-descripcion">
                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                         <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                    </div>
                </div>				

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ejemplar-item">
                     <a href="/PRL-V3/views/ejemplares/ejem_description.php" class="ejemplar-link" data-toggle="modal">
                         <div class="ejemplar-hover">
                             <div class="ejemplar-hover-content">
                                 <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                            </div>
                        </div>
                        <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                        <img src="/PRL-V3/resources/img/book-portada.jpg" class="img-responsive" alt="">
                        <label class="label label-default portafolio-publicacion">Año: 2015</label>
                    </a>
                    <div class="ejemplar-descripcion">
                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                         <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                    </div>
                </div>		

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ejemplar-item">
                     <a href="/PRL-V3/views/ejemplares/ejem_description.php" class="ejemplar-link" data-toggle="modal">
                         <div class="ejemplar-hover">
                             <div class="ejemplar-hover-content">
                                 <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                            </div>
                        </div>
                        <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                        <img src="/PRL-V3/resources/img/book-portada.jpg" class="img-responsive" alt="">
                        <label class="label label-default portafolio-publicacion">Año: 2015</label>
                    </a>
                    <div class="ejemplar-descripcion">
                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                         <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                    </div>
                </div>		

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ejemplar-item">
                     <a href="/PRL-V3/views/ejemplares/ejem_description.php" class="ejemplar-link" data-toggle="modal">
                         <div class="ejemplar-hover">
                             <div class="ejemplar-hover-content">
                                 <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                            </div>
                        </div>
                        <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                        <img src="/PRL-V3/resources/img/book-portada.jpg" class="img-responsive" alt="">
                        <label class="label label-default portafolio-publicacion">Año: 2015</label>
                    </a>
                    <div class="ejemplar-descripcion">
                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                         <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                    </div>
                </div>	
                
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ejemplar-item">
                     <a href="/PRL-V3/views/ejemplares/ejem_description.php" class="ejemplar-link" data-toggle="modal">
                         <div class="ejemplar-hover">
                             <div class="ejemplar-hover-content">
                                 <i class="fa fa-eye fa-1x"><span>Ver<span></i>
                            </div>
                        </div>
                        <label class="label label-default portafolio-categoria">Jovenes - Adultos</label>
                        <img src="/PRL-V3/resources/img/book-portada.jpg" class="img-responsive" alt="">
                        <label class="label label-default portafolio-publicacion">Año: 2015</label>
                    </a>
                    <div class="ejemplar-descripcion">
                        <small><strong>De:</strong > Nombre_del_autor uno_a__dos_reglones_m-aximo.</small>
                         <h6>Título del libro en no más de uno o dos reglones, si no cabe se…</h6>
                    </div>
                </div>	

                    <div class="row">
                        <button type="button" class="btn btn-block btn-default"><i class="fa fa-plus"></i> Cargar más</button>
                    </div>
                          
                  

                 </div>
            </div><!--Container-->
    </section>



    <!-- jQuery -->
    <script src="../../resources/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="../../shared/js/portal.js"></script>

    <!--Select2 -->
    <script src="../../bower_components/select2/dist/js/select2.min.js"></script>

    <!-- Select2 Idioma-->
    <script src="../../bower_components/select2/dist/js/i18n/es.js"></script>

    <script type="text/javascript">
        $(document).ready(function() 
        {
            $('.js-rango-etario').select2({
                language: "es"
            });
        });

    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      // Initialize "states" example
      var $states = $(".js-source-states");
      var statesOptions = $states.html();
      
    
      $(".js-states").append(statesOptions);
    }); 
</script>

</body>
</html>
