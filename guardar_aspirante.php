<?php?>
<?php
include_once "conexion.php";
include_once "Aspirante.php";
$estudiante = new Aspirante( 
    $_POST["nombre"],
     $_POST ["apellido_p"], 
     $_POST ["apellido_m"],
$_POST ["fecha_nac"], 
$_POST ["direccion"],
$_POST ["telefono"],
$_POST ["correo"],
$_POST ["fk_genero"],
$_POST ["fk_pais"],
$_POST ["fk_estado"],
$_POST ["fk_municipio"],
$_POST ["fk_carrera"],
$_POST ["fk_institucion"],
$_POST ["fk_estatus"]);
$estudiante->guardar();
header("Location: mostrar_aspirante.php");

