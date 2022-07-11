<?php
?>
<?php
include_once "conexion.php";
include_once "Carrera.php";
include_once "encabezado.php";
$estudiante = Carrera::obtenerUno($_GET["id_carrera"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Carrera</h1>
        <form action="actualizar_carrera.php" method="POST">
            <input type="hidden" name="id_carrera" value="<?php echo $_GET["id_carrera"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre Carrera</label>
                <input value="<?php echo $estudiante->carrera ?>" name="carrera" required type="text" id="carrera" class="form-control" placeholder="Carrera">
            </div>
            <div class="form-group">
                <label for="plan">Plan</label>
                <input value="<?php echo $estudiante->fk_plan ?>" name="fk_plan" required type="text" id="fk_plan" class="form-control" placeholder="Plan">
            </div>
            <div class="form-group">
                <label for="grupo">Facultad</label>
                <input value="<?php echo $estudiante->fk_facultad ?>" name="fk_facultad" required type="text" id="fk_facultad" class="form-control" placeholder="Facultad">
            </div>
            <div class="form-group">
                <label for="grupo">Campus</label>
                <input value="<?php echo $estudiante->fk_campus ?>" name="fk_campus" required type="text" id="fk_campus" class="form-control" placeholder="Campus">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>