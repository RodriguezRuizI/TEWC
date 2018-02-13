<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
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
                <h1>Pide cita</h1>
                <p>Pide cita online y olvídate de lo demás. Cuéntanos más detalles de tu caso para estudiarlo con antelación</p>
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
<form class="form-horizontal" action="answer.php" method="post">
    <fieldset>
        <legend class="col">Datos personales</legend>
        <p><label class="col">Nombre(*) <input type="text" class="form-control2" id="nombre" name="nombre"  minlength="3" maxlength="20" placeholder="Introduzca su nombre" required></label></p>
        <p><label class="col">Apellidos(*) <input type="text" class="form-control2" id="apellidos" name="apellidos" minlength="3" maxlength="30" placeholder="Introduzca sus apellidos" required></label></p>
        <p><label class="col">DNI/NIE/Pasaporte(*) <input type="text" class="form-control2" id="DNI" name="DNI"  minlength="8" maxlength="20" placeholder="DNI/NIE/Pasaporte" required></label></p>
        <p><label class="col">Fecha de nacimiento <input type="date" class="form-control2"  id="nacimiento" name="nacimiento" required></label></p>
        <p><label class="col">Teléfono <input type="tel" class="form-control2" id="telefono" name="telefono"  placeholder="Número de contacto" required></label></p>
        <p><label class="col">Correo electrónico(*) <input type="email" class="form-control2" id="correo" name="correo"  minlength="5" maxlength="50" placeholder="Introduzca su correo electrónico" required></label></p>
    </fieldset>
    <fieldset><legend class="col">Selecciona Género</legend>
        <p><label class="col">Hombre <input type="radio" id="hombre" name="hombre" ></label>
            <label class="col">Mujer <input type="radio" id="mujer" name="mujer" ></label>
        </p>
    </fieldset>
    <fieldset><legend class="col">Dirección</legend>
        <p><label class=" col"> Calle <input type="text"  name="Calle" class="form-control2"  maxlength="25" placeholder="calle" ></label></p>
        <p><label class="col">Número<input type="number" class="form-control2" name="Número" maxlength="1000" placeholder="Número" ></label></p>
        <p><label class=" form-control2 col">Piso <input type="text" name="Número" size="2" placeholder="Piso">&nbsp; Letra <input type="text" name="Letra" size="2" minlength="1" maxlength="3" placeholder="letra" ></label></p>
        <p><label class="col">Código postal <input type="number" name="Código postal" class="form-control2" id="Código postal" placeholder="Código postal"></label> </p>
        <p><label class="col">Provincia/Otros
                <select class="form-control2" name="provincia" id="provincia">
                    <option value="Madrid">Madrid</option>
                    <option value="Álava">Álava</option>
                    <option value="Albacete">Albacete</option>
                    <option value="Alicante">Alicante</option>
                    <option value="Almería">Almería</option>
                    <option value="Asturias">Asturias</option>
                    <option value="Ávila">Ávila</option>
                    <option value="Badajoz">Badajoz</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Burgos">Burgos</option>
                    <option value="Cáceres">Cáceres</option>
                    <option value="Cádiz">Cádiz</option>
                    <option value="Cantabria">Cantabria</option>
                    <option value="Castellón">Castellón</option>
                    <option value="Ciudad Real">Ciudad Real</option>
                    <option value="Córdoba">Córdoba</option>
                    <option value="Cuenca">Cuenca</option>
                    <option value="Gerona">Girona</option>
                    <option value="Granada">Granada</option>
                    <option value="Guadalajara">Guadalajara</option>
                    <option value="Guipúzcoa">Guipúzcoa</option>
                    <option value="Huelva">Huelva</option>
                    <option value="Huesca">Huesca</option>
                    <option value="Islas Baleares">Islas Baleares</option>
                    <option value="Jaén">Jaén</option>
                    <option value="La Coruña">La Coruña</option>
                    <option value="La Rioja">La Rioja</option>
                    <option value="Las Palmas">Las Palmas</option>
                    <option value="León">León</option>
                    <option value="Lérida">Lérida</option>
                    <option value="Lugo">Lugo</option>
                    <option value="Málaga">Málaga</option>
                    <option value="Murcia">Murcia</option>
                    <option value="Navarra">Navarra</option>
                    <option value="Orense">Orense</option>
                    <option value="Palencia">Palencia</option>
                    <option value="Pontevedra">Pontevedra</option>
                    <option value="Salamanca">Salamanca</option>
                    <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                    <option value="Segovia">Segovia</option>
                    <option value="Sevilla">Sevilla</option>
                    <option value="Soria">Soria</option>
                    <option value="Tarragona">Tarragona</option>
                    <option value="Tenerife">Tenerife</option>
                    <option value="Teruel">Teruel</option>
                    <option value="Toledo">Toledo</option>
                    <option value="Valencia">Valencia</option>
                    <option value="Valladolid">Valladolid</option>
                    <option value="Vizcaya">Vizcaya</option>
                    <option value="Zamora">Zamora</option>
                    <option value="Zaragoza">Zaragoza</option>
                    <option value="Ceuta">Ceuta</option>
                    <option value="Melilla">Melilla</option>

                </select>
            </label></p>
        <div>
           <p> <label class="col">Another country <input type="checkbox" name="country" value="Another country"></label></p>
            <p><label class="col">Country <input type="text" class="form-control2" maxlength="20" placeholder="your country"></label> </p>
        </div>

    </fieldset>
    <fieldset>
        <legend class="col">Preferencia de la cita</legend>
        <p><label class="col">Fecha de preferencia <input type="date" class="form-control2" id="fecha" name="fecha" required></label></p>
        <p><label class="col">Hora de preferencia <input type="time" class="form-control2" id="hora" name="hora" required></label> </p>
    </fieldset>
    <div class="col">
        <h3>Resumen del historial médico(*)</h3>
        <textarea cols="70" rows="10" id="resumen" name="resumen" placeholder="Breve resumen del historial médico" required></textarea>
    </div>
    <p><label class="col">Ficheros adjuntos con el historial<input type="file" id="file" value="elegir archivos" name="file"></label></p>
    <p class="col"><input type="submit" value="Enviar"><input type="reset" value="Restablecer"></p>
</form>
<?php require_once "footer.php";?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>