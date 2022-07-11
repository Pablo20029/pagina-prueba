<?php?>
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "frontpage.php";
$estudiantes = estudiante::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiante</h1>
        <a href="formulario_registro_aspirante.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido Pat</th>
                    <th>Apellido Mat</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes as $estudiante) { ?>
                    <tr>
                        <td class="text-center"><?php echo $estudiante["id_matricula"] ?></td>
                        <td class="text-center"><?php echo $estudiante["nombre"] ?></td>
                        <td class="text-center"><?php echo $estudiante["ap_paterno"] ?></td>
                        <td class="text-center"><?php echo $estudiante["ap_materno"] ?></td>
                        <td class="text-center"><?php echo $estudiante["sexo"] ?></td>
                        <td class="text-center"><?php echo $estudiante["edad"] ?></td>
                        <td class="text-center"><?php echo $estudiante["correo"] ?></td>

                        <td class="text-center"><?php echo $estudiante["estatus"] ?></td>
                        
                        
                        <td>
                            <a href="editar_aspirante.php?id_aspirante=<?php echo $aspirante["id_aspirante"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_aspirante.php?id_aspirante=<?php 
                            echo $aspirante["id_aspirante"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once "pie.php";
