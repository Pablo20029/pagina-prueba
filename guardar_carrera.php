<?php?>
<?php
include_once "conexion.php";
include_once "Carrera.php";
$estudiante = new Carrera( 
$_POST ["carrera"], 
$_POST ["fk_plan"],
$_POST ["fk_facultad"], 
$_POST ["fk_campus"]
);
$estudiante->guardar();
header("Location: mostrar_carreras.php");

