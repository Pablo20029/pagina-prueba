<?php
?>
<?php
include_once "conexion.php";
include_once "Estudiante.php";
include_once "encabezado.php";
$estudiante = Estudiante::obtenerUno($_GET["id_matricula"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>
        <form action="actualizar_estudiante.php" method="POST">
        <div class="form-group">
                <label for="nombre">Matricula</label>
                <input value="<?php echo $estudiante->id_matricula ?>" name="id_matricula" required type="text" id="id_matricula" class="form-control" placeholder="Estudiante">
            </div>

            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
     </form>
    </div>
</div>