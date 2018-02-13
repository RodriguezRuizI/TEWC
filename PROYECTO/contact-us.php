<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contacta | Ortocenter</title>
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
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Contacta con nosotros</h1>
                <p>Envíanos tus propuestas o preguntas y enseguida te responderemos.<br> Además también puedes darnos tu opinión o venir a vernos.</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Contacta</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="contact-page" class="container">
    <div class="row">
        <div class="col-sm-8">
            <h4>Contáctanos</h4>
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="form-horizontal" role="form" action="respuesta.php" method="post">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input type="text" id="nombre" name="nombre" class="form-control" required placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" id="apellidos" name="apellidos" class="form-control" required placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="telefono" name="telefono" required size="25" placeholder="Teléfono de contacto">
                        </div>
                        <div class="form-group">
                            <input type="email" id="mail" name="mail" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar mensaje</button>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h4>Deja tu comentario.</h4>
                        <textarea name="message" id="message" required class="form-control" rows="15" placeholder="¿En qué podemos ayudarte?"></textarea>
                    </div>
                </div>
            </form><!-- form -->
        </div><!--/.col-sm-8-->
        <div class="col-sm-4">
            <h4>¿Dónde estamos?</h4>
            <iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;q=Blasco%20de%20Garay%2C%2013&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            <p> C/Blasco de Garay, 13 28015 MADRID <br> Tel.:  915492585 y 915492677 <br> Email: ortocenter@ortocenter.es</p>
        </div><!--/.col-sm-4-->
    </div>
    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="500" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="js/myjquery.js"></script>
</section><!--/#contact-page-->

<?php require_once "footer.php";?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>