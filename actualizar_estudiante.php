<?php?>
<?php
include_once "conexion.php";

$nombre1 = $_POST['id_matricula'];

$sentencia = $mysqli->prepare("UPDATE estudiante SET id_matricula = '$nombre1'");
$sentencia->execute();
header("Location: mostrar_estudiantes.php");
       ?>