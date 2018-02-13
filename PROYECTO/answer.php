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
                    <p>Su cita fue registrada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="date.php">Pide cita</a></li>
                        <li class="active">Answer</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->
    <br>
    <h1 class="center">¡Cita enviada!</h1>
    <?php
    require_once "conectar.php";
    $nombre= $_POST['nombre'];
    $apellidos= $_POST['apellidos'];
    $DNI=$_POST['DNI'];
    $nacimiento=$_POST['nacimiento'];
    $telefono= $_POST['telefono'];
    $correo = $_POST['correo'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $resumen= $_POST['resumen'];


    $validado = (!empty($nombre)&& !empty($apellidos) && !empty($DNI) && !empty($nacimiento) && !empty($telefono)  && !empty($correo) && !empty($fecha) && !empty($hora) && !empty($resumen) );
    if (!$validado) {
        $error = "Los campos nombre $nombre, apellidos $apellidos, DNI $DNI, nacimiento $nacimiento, telefono $telefono, email $correo, fecha $fecha, hora $hora y mensajec $resumen son obligatorios";
        header("Location: contact-us.php?error=$error") or die("Error al redirigir a formulario con error $error");;
    }

    $sql_insert = "INSERT INTO `Date` (nombre, apellidos, DNI, nacimiento, telefono, correo, fecha, hora, resumen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    try {
        $sentencia = $db->prepare($sql_insert);
        $sentencia->execute(array($nombre, $apellidos, $DNI, $nacimiento, $telefono, $correo, $fecha, $hora, $resumen));

    if($validado) {
        echo "<h3 class='center'><ul>
    <p>Nombre: $nombre</p>
    <p>Apellidos: $apellidos</p>
    <p>DNI: $DNI</p>
    <p>Fecha de nacimiento : $nacimiento</p>
    <p>Teléfono: $telefono</p>
    <p>Email: $correo</p>
    <p>Fecha cita: $fecha</p>
    <p>Hora cita: $hora</p>
    <p>Resumen: $resumen</p>
    </ul></h3>";

    }

    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
    }

    ?>
    <h1 class="center">¡Gracias por confiar en nosotros!</h1>
    <br>
    <h3 class=" center nav-justified">Gracias por confiar en nostros. En seguida le mandaremos <br>un mensaje de confirmación o bien si su fecha <br>y hora elegidas ya están ocupadas le llamaremos para <br>confirmar otra fecha y hora diferentes.<br> Sus datos serán guardados en nuestro historial médico con <br> el fin de recibir una atención más personalizada el <br>día de su cita.</h3>

    <div class="center"><img  src="images/confi.png" alt="" ></div>
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