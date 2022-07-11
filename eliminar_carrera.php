<?php?>
<?php
include_once "conexion.php";
include_once "Carrera.php";
Carrera::eliminar($_GET["id_carrera"]);
header("Location: mostrar_carrera.php");
