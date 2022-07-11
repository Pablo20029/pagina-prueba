<?php?>
<?php
include_once "conexion.php";
include_once "Aspirante.php";
Aspirante::eliminar($_GET["id_aspirante"]);
header("Location: mostrar_aspirante.php");
