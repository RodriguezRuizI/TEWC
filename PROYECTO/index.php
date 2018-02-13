<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio | Ortocenter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<?php require_once "header.php";?>
<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Plantillas a medida especializadas.</h2>
                                <p class="animation animated-item-2">Le atenderán los mejores profesionales para que vuelva a caminar con libertad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="boxed animation animated-item-1">Porque lo más importante para nosotros es su salud y bienestar.</h2>
                                <p class="boxed animation animated-item-2">Contamos con los mejores productos y especialistas en ortopedia que pueda encontrar.</p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="services.php">Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Productos especiales para lesiones y rehabilitación.</h2>
                                <p class="animation animated-item-2">Gran variedad de artículos para lesiones deportivas, fracturas, tendinitis y mucho más.</p>
                                <a class="btn btn-md animation animated-item-3" href="products.php">Productos</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="centered">
                                <div class="embed-container">
                                    <iframe src="https://www.youtube.com/embed/OujAkOVBaYk?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-twitter icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Síguenos en Twitter</h3>
                        <p>Todos los días noticias interesantes sobre salud y hábitos. También contenido sobre nuestros nuevos productos para manteneros al día.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-facebook icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Búscanos en Facebook</h3>
                        <p>También tenemos Facebook www.facebook.com/ignajera. Búscanos y te mantedrás al día con todas nuestras publicaciones.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-google-plus icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Nuestro correo</h3>
                        <p>Y si lo que necesitas es contactar con nosotros no dudes en hacer vía telefono o a través de nuestro correo: ortocenter@ortocenter.es</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
    </div>
</section><!--/#services-->

<section id="recent-works">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Productos destacados</h3>
                <p>Aquí puedes encontrar los productos y servicios más destacados que ofrecemos.</p>
                <div class="btn-group">
                    <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                    <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                </div>
                <p class="gap"></p>
            </div>
            <div class="col-md-9">
                <div id="scroller" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                                            <h5>
                                                Estudio de la marcha personalizado.
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Estudios de la marcha personalizados para saber cuáles son tus necesidades." href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item2.jpg" alt="">
                                            <h5>
                                                Prótesis.
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Realizamos todo tipo de prótesis a medida." href="images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item3.jpg" alt="">
                                            <h5>
                                                DAFO's.
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Órtesis diseñadas para sostener el pie." href="images/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.row-->
                        </div><!--/.item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item4.jpg" alt="">
                                            <h5>
                                                Plantillas a medida.
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Plantillas para todos los gustos de diseño." href="images/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item5.jpg" alt="">
                                            <h5>
                                                Férulas a medida.
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Férulas para todos los tipos de lesiones y anomalías." href="images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item6.jpg" alt="">
                                            <h5>
                                                Rodilleras.
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Rodilleras y muñequeras especializadas y a medida para evitar lesiones." href="images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/.item-->
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
</section><!--/#recent-works-->

<section id="testimonial" class="alizarin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center">
                    <h2>Experiencias de nuestros clientes</h2>
                    <p>Coméntanos tus experiencias para saber si lo hicimos bien o podemos mejorar nuestros servicios.</p>
                </div>
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-6">
                        <blockquote>
                            <p>
                                Gracias a Ortocenter he cambiado mis hábitos en el calzado, he mejorado y me he concienciado de que hay que cuidar los pies … a fin de cuentas aguantan todo el peso del cuerpo.<br>Volveré sin ninguna duda cuando necesite a los mejores profesionales en ortopedia.</p>
                            <small>Montse Iglesia <cite title="Source Title">de Madrid, julio 2012</cite></small>
                        </blockquote>
                        <blockquote>
                            <p>Tenía los pies totalmente pronados, es decir, caídos hacia dentro. Ello me producía tal dolor que apenas podía andar. El personal de Ortocenter me hizo unas plantillas y me recomendó el calzado adecuado de modo que he vuelto a recuperar mi ritmo de siempre y ahora voy a todas partes sin que me duelan los pies. Vuelvo a tener una vida plenamente activa a mis 80 años.</p>
                            <small>Carmen <cite title="Source Title">de Valladolid, octubre 2015</cite></small>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote>
                            <p>En mi caso tuve la suerte de acertar con un equipo de técnicos que no solo me dieron confianza, sino que me han devuelto a la vida activa. Parece un milagro pero no es un milagro, es profesionalidad....</p>
                            <small>Enrique Recuero <cite title="Source Title">de Segovia, marzo 2014</cite></small>
                        </blockquote>
                        <blockquote>
                            <p>Con 14 años, no sabía muy bien cómo iba a llevar el drama de ponerme un corsé de Milwaukee 24 horas al día durante un par de años, como me había recomendado el traumatólogo. Sin embargo, en esta clínica me hicieron ver el hecho de llevarlo como algo totalmente natural, que me ayudaría a corregir mis problemas de columna vertebral, como efectivamente fue. Me sentí entendido y acompañado, estoy muy agradecido.</p>
                            <small>Marcos <cite title="Source Title">de Madrid, enero 2016</cite></small>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#testimonial-->

<?php require_once "footer.php";?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>