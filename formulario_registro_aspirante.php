<?php
?>
<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de estudiantes</h1>
        <form action="guardar_aspirante.php" method="POST">

        
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
         
            <div class="form-group">
                <label for="apellido_p">Apellido Paterno</label>
                <input name="apellido_p" required type="text" id="apellido_p" class="form-control" placeholder="Apellido Paterno">
            </div>
            <div class="form-group">
                <label for="Apellido Materno">Apellido Materno</label>
                <input name="apellido_m" required type="text" id="apellido_m" class="form-control" placeholder="Apellido Materno">
            </div>

            <div class="form-group">
                <label for="Fecha Nacimiento">Fecha Nacimiento</label>
                <input name="fecha_nac" required type="date" id="fecha_nac" class="form-control" placeholder="fecha_nac">
            </div>
            <div class="form-group">
                <label for="Direccion">Direccion</label>
                <input name="direccion" required type="text" id="direccion" class="form-control" placeholder="Direccion">
            </div>

           
            <div class="form-group">
                <label for="Telefono">Telefono</label>
                <input name="telefono" required type="text" id="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="Correo">Correo</label>
                <input name="correo" required type="email" id="correo" class="form-control" placeholder="Correo">
            </div>
           

            <div class="form-group">
                <label for="Genero">Genero</label>
                <input name="fk_genero" required type="number" id="fk_genero" class="form-control" placeholder="Genero">
            </div>

            <div class="form-group">
                <label for="Pais">Pais</label>
                <input name="fk_pais" required type="number" id="fk_pais" class="form-control" placeholder="Estado">
            </div>
            
            <div class="form-group">
                <label for="Estado">Estado</label>
                <input name="fk_estado" required type="number" id="fk_estado" class="form-control" placeholder="Estado">
            </div>

            <div class="form-group">
                <label for="Municipio">Municipio</label>
                <input name="fk_municipio" required type="number" id="fk_municipio" class="form-control" placeholder="Municipio">
            </div>
            <div class="form-group">
                <label for="Carrera">Carrera</label>
                <input name="fk_carrera" required type="number" id="fk_carrera" class="form-control" placeholder="Carrera">
            </div>

            <div class="form-group">
                <label for="Institucion">Institucion</label>
                <input name="fk_institucion" required type="number" id="fk_institucion" class="form-control" placeholder="Institucion">
            </div>

            <div class="form-group">
                <label for="Estatus">Estatus</label>
                <input name="fk_estatus" required type="text" id="fk_estatus" class="form-control" placeholder="Estatus">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include "pie.php" ?>