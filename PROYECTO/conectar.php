<?php

$dbhost = "mysql12.000webhost.com";
$dbuser = "a8427774_admin";
$dbpass = "cn8iujws8";
$dbname = "a8427774_ortoc";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $error) {
    die("Error conexión BBDD " . $error->getMessage());
}
?>