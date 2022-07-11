<?php
?>
<?php
include_once "conexion.php";
include_once "Aspirante.php";
include_once "encabezado.php";
$aspirante = Aspirante::obtenerUno($_GET["id_matricula"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Estudiante</h1>
        <form action="actualizar_aspirante.php" method="POST">

            <input type="hidden" name="id_matricula" value="<?php echo $_GET["id_matricula"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $aspirante->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="grupo">Apellido Pat</label>
                <input value="<?php echo $aspirante->apellido_p ?>" name="apellido_p" required type="text" id="apellido_p" class="form-control" placeholder="Apellido Paterno">
            </div>

            <div class="form-group">
                <label for="grupo">Apellido Mat</label>
                <input value="<?php echo $aspirante->apellido_m ?>" name="apellido_m" required type="text" id="apellido_m" class="form-control" placeholder="Apellido Materno">
            </div>

            <div class="form-group">
                <label for="grupo">Fecha Nacimiento</label>
                <input value="<?php echo $aspirante->fecha_nac ?>" name="fecha_nac" required type="date" id="fecha_nac" class="form-control" placeholder="Fecha Nacimiento">
            </div>


            <div class="form-group">
                <label for="grupo">Direccion</label>
                <input value="<?php echo $aspirante->direccion ?>" name="direccion" required type="text" id="direccion" class="form-control" placeholder="direccion">
            </div>

            <div class="form-group">
                <label for="grupo">Telefono</label>
                <input value="<?php echo $aspirante->telefono ?>" name="telefono" required type="text" id="telefono" class="form-control" placeholder="telefono">
            </div>

            <div class="form-group">
                <label for="grupo">Correo</label>
                <input value="<?php echo $aspirante->correo ?>" name="correo" required type="email" id="correo" class="form-control" placeholder="correo">
            </div>

            <div class="form-group">
                <label for="grupo">Genero</label>
                <input value="<?php echo $aspirante->fk_genero ?>" name="fk_genero" required type="number" id="fk_genero" class="form-control" placeholder="fk_genero">
            </div>

            <div class="form-group">
                <label for="grupo">Pais</label>
                <input value="<?php echo $aspirante->fk_pais ?>" name="fk_pais" required type="number" id="fk_pais" class="form-control" placeholder="fk_pais">
            </div>
            <div class="form-group">
                <label for="grupo">Estado</label>
                <input value="<?php echo $aspirante->fk_estado ?>" name="fk_estado" required type="number" id="fk_estado" class="form-control" placeholder="fk_estado">
            </div>
            <div class="form-group">
                <label for="grupo">Municipio</label>
                <input value="<?php echo $aspirante->fk_municipio ?>" name="fk_municipio" required type="number" id="fk_municipio" class="form-control" placeholder="fk_municipio">
            </div>
            <div class="form-group">
                <label for="grupo">Carrera</label>
                <input value="<?php echo $aspirante->fk_carrera ?>" name="fk_carrera" required type="number" id="fk_carrera" class="form-control" placeholder="fk_carrera">
            </div>
            <div class="form-group">
                <label for="grupo">Institucion</label>
                <input value="<?php echo $aspirante->fk_institucion ?>" name="fk_institucion" required type="number" id="fk_institucion" class="form-control" placeholder="fk_institucion">
            </div>

            <div class="form-group">
                <label for="grupo">Status</label>
                <input value="<?php echo $aspirante->fk_estatus ?>" name="fk_estatus" required type="text" id="fk_estatus" class="form-control" placeholder="fk_estatus">
            </div>
            
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>