<?php?>
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Aspirante.php";
$aspirantes = Aspirante::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de estudiantes</h1>
        <a href="formulario_registro_aspirante.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aspirantes as $aspirante) { ?>
                    <tr>
                        <td class="text-center"><?php echo $aspirante["id_matricula"] ?></td>
                        <td class="text-center"><?php echo $aspirante["nombre"] ?></td>
                        <td class="text-center"><?php echo $aspirante["ap_paterno"] ?></td>
                        <td class="text-center"><?php echo $aspirante["ap_materno"] ?></td>
                        <td class="text-center"><?php echo $aspirante["sexo"] ?></td>
                        <td class="text-center"><?php echo $aspirante["edad"] ?></td>
                        <td class="text-center"><?php echo $aspirante["correo"] ?></td>
    
                        <td>
                            <a href="editar_aspirante.php?id_matricula=<?php echo $aspirante["id_matricula"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_aspirante.php?id_matricula=<?php echo $aspirante["id_matricula"] ?>" class="btn btn-danger">
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