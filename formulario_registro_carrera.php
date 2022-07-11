<?php


$mysqli = new mysqli('localhost', 'root', '', 'escuelaucq');








?>
<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de Carrera</h1>
    <form action="guardar_carrera.php" method="POST">
         
            <div class="form-group">
                <label for="carrera">Nombre Carrera</label>
                <input name="carrera" required type="text" id="carrera" class="form-control" placeholder="Carrera">
            </div>

            <div class="form-group">
                <label for="fk_plan">Plan</label>
                <input name="fk_plan" required type="text" id="fk_plan" class="form-control" placeholder="Plan">
            </div>

            <div class="form-group">
                <label for="fk_facultad">Facultad</label>
                <input name="fk_facultad" required type="number" id="fk_facultad" class="form-control" placeholder="Facultad">
            </div>
            <div class="form-group">
                <label for="fk_campus">Campus</label>
                <input name="fk_campus" required type="number" id="fk_campus" class="form-control" placeholder="Campus">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
     </form>

     
    </div>
</div>
<?php 

include "pie.php" ?>