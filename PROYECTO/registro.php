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
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Registro</h1>
                <p>Newsletter</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="active">Registro</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->
<div>

    <h1 class="center">¡Correo añadido!</h1>
    <?php
    require_once "conectar.php";
    $email = $_POST['email'];
    $validado = (!empty($email));
    if (!$validado) {
        $error = "El campo email $email, son obligatorios";
        header("Location: index.php?error=$error") or die("Error al redirigir a formulario con error $error");;
    }

    $sql_insert = "INSERT INTO `Newsletter` (email) VALUES ('$email')";
    try {
        $resultado = 	$db->query($sql_insert);

    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
    }

echo "<h4 class='center'> Su email:</h4> <h3 class='center'> $email </h3><h4 class='center'>  ha sido registrado en nuestra base de datos. <br>Recibirá todas nuestras novedades en productos y servicios.<br>
Además, también recibirá la publicación de nuevas entredas <br>en el blog y noticias sobre el mundo de la ortopedia. Si desea<br>darse de baja del servicio puede enviarnos un correo electrónico <br> a través del formulario <a id=\"contacta\" href=\"contact-us.php\">Contacta. </a></h4><br> <br>"
    ?>
    <h1 class="center">¡Gracias por suscribirse!</h1>
    <div class="center"><img  src="images/Agradecimiento.png" alt="" ></div>
    <br>
    <br>
<?php require_once "footer.php";?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>