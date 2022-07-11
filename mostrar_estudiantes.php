<?php
include_once "conexion.php";
include_once "encabezado.php";
$con=mysqli_connect("localhost", "root", "", "escuelaucq") or
die("Problemas con la conexión");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }



$result=mysqli_query($con, "SELECT al.id_alumno, a.nombre, a.apellido_p, a.apellido_m, a.fecha_nac,a.direccion,a.telefono,a.correo,g.genero,p.pais,e.estado,m.municipio,c.carrera,i.institucion,s.estatus FROM alumno al INNER JOIN aspirante a ON al.fk_aspirante = a.id_aspirante INNER JOIN genero g ON a.fk_genero = g.id_genero INNER JOIN pais p ON a.fk_pais = p.id_pais INNER JOIN estado e ON a.fk_estado = e.id_estado INNER JOIN municipio m ON a.fk_municipio = m.id_municipio INNER JOIN carrera c ON a.fk_carrera = c.id_carrera INNER JOIN institucion i ON a.fk_institucion = i.id_institucion INNER JOIN estatus s ON a.fk_estatus = s.id_estatus") or die(mysql_error());

?>

<div class="row">
    <div class="col-12">

    
        <h1> Listado de Estudiantes </h1>
        <a href="formulario_registro_estudiante.php" class="btn btn-info my-2"> Nuevo </a>
    </div>
    <div class="col-12 table-responsive">
<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Matricula </th>
                    <th>Nombre</th>
                    <th>Apellido Pat</th>
                    <th>Apellido Mat</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Genero</th>
                    <th>Pais</th>
                    <th>Estado</th>
                    <th>Municipio</th>
                    <th>Carrera</th>
                    <th>Institucion</th>
                    <th>Status</th>

                </tr>
            </thead>

    <tbody>
    <?php $n=0; while($row = mysqli_fetch_array($result)){ $n++;?>
    <tr>
    <td class="text-center"><?php echo $row["id_alumno"]; ?></td>
      <td class="text-center"><?php echo $row["nombre"]; ?></td>
      <td class="text-center"><?php echo $row["apellido_p"]; ?></td>
      <td class="text-center"><?php echo $row["apellido_m"]; ?></td>
      <td class="text-center"><?php echo $row["direccion"]; ?></td>
      <td class="text-center"><?php echo $row["telefono"]; ?></td>
      <td class="text-center"><?php echo $row["correo"]; ?></td>
      <td class="text-center"><?php echo $row["genero"]; ?></td>
      <td class="text-center"><?php echo $row["pais"]; ?></td>
      <td class="text-center"><?php echo $row["estado"]; ?></td>
      <td class="text-center"><?php echo $row["municipio"]; ?></td>
      <td class="text-center"><?php echo $row["carrera"]; ?></td>
      <td class="text-center"><?php echo $row["institucion"]; ?></td>
      <td class="text-center"><?php echo $row["estatus"]; ?></td>
      <td>
                            <a href="editar_estudiante.php?id_alumno=<?php echo $row["id_alumno"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_estudiante.php?id_alumno=<?php echo $row["id_alumno"] ?>" class="btn btn-danger">
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