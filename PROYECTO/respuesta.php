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
<div>
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Answer</h1>
                    <p>Su comentario fue registrado</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="contact-us.php">Contacta</a></li>
                        <li class="active">Answer</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->
    <br>
    <h1 class="center">¡Comentario enviado!</h1>
    <?php
    require_once "conectar.php";
    $nombre= $_POST['nombre'];
    $apellidos= $_POST['apellidos'];
    $telefono= $_POST['telefono'];
    $mail = $_POST['mail'];
    $message= $_POST['message'];
    $validado = (!empty($nombre)&& !empty($apellidos) && !empty($telefono)  && !empty($mail) && !empty($message) );
    if (!$validado) {
        $error = "Los campos nombre $nombre, apellidos $apellidos, telefono $telefono, email $mail y mensajec $message son obligatorios";
        header("Location: contact-us.php?error=$error") or die("Error al redirigir a formulario con error $error");;
    }


    $sql_insert = "INSERT INTO `Contacta` (nombre, apellidos, telefono, mail, message) VALUES (?, ?, ?, ?, ?)";
    try {
        $sentencia = $db->prepare($sql_insert);
        $sentencia->execute(array($nombre, $apellidos, $telefono, $mail, $message));

        if($validado){
            echo "<h3 class='center'><ul>
    <p>Nombre: $nombre</p>
    <p>Apellidos: $apellidos</p>
    <p>Email: $mail</p>
    <p>Teléfono: $telefono</p>
    <p>Mensaje: $message</p>
    </ul></h3>";

        }else
        {
            echo "<h1>Rellene adecuadamente el campo correo</h1>";
        }

    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
    }

     ?>
    <h1 class="center">¡Gracias por escribirnos!</h1>
    <br>
    <div class="center"><img  src="images/gracias.jpg" alt="" ></div>
    <br>

    <br>

    <br>

<?php require_once "footer.php";?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>