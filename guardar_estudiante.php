<?php?>
<?php
include_once "conexion.php";

$nombre1 = $_POST['id_alumno'];
$nombre2 = $_POST['fk_aspirante'];

$sentencia = $mysqli->prepare("INSERT INTO alumno (id_alumno,fk_aspirante)VALUES ('$nombre1','$nombre2')");
$sentencia->execute();
header("Location: mostrar_estudiantes.php");
       ?>