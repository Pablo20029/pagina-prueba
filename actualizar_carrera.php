<?php?>
<?php
include_once "conexion.php";
include_once "Carrera.php";
$estudiante = new Carrera( 
$_POST ["carrera"], 
$_POST ["fk_plan"],
$_POST ["fk_facultad"], 
$_POST ["fk_campus"],
$_POST ["id_carrera"]
);

echo $_POST ["id_carrera"];
$estudiante->actualizar();
header("Location: mostrar_carreras.php");
