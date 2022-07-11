<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Estudiante.php";
$con=mysqli_connect("localhost", "root", "", "escuelaucq") or
die("Problemas con la conexión");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }



$result=mysqli_query($con, "SELECT c.id_carrera, c.carrera, p.plan, f.facultad, ca.campus from carrera c INNER JOIN plan p ON c.fk_plan = p.id_plan INNER JOIN facultad f ON c.fk_facultad = f.id_facultad INNER JOIN campus ca ON c.fk_campus = ca.id_campus") or die(mysql_error());

?>

<div class="row">
    <div class="col-12">

    
        <h1> Listado de Carreras </h1>
        <a href="formulario_registro_carrera.php" class="btn btn-info my-2"> Nuevo </a>
    </div>
    <div class="col-12 table-responsive">
<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Clave  </th>
                    <th>Carrera</th>
                    <th>Plan</th>
                    <th>Facultad</th>
                    <th>Campus</th>
                </tr>
            </thead>

    <tbody>
    <?php $n=0; while($row = mysqli_fetch_array($result)){ $n++;?>
    <tr>
    <td class="text-center"><?php echo $row["id_carrera"]; ?></td>
      <td class="text-center"><?php echo $row["carrera"]; ?></td>
      <td class="text-center"><?php echo $row["plan"]; ?></td>
      <td class="text-center"><?php echo $row["facultad"]; ?></td>
      <td class="text-center"><?php echo $row["campus"]; ?></td>
      <td>
                            <a href="editar_carrera.php?id_carrera=<?php echo $row["id_carrera"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_carrera.php?id_carrera=<?php echo $row["id_carrera"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
    </tr>
    <?php } ?>
  </tbody>

    </div>
</div>
<?php
include_once "pie.php";
?>