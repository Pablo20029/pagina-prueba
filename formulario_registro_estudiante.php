<?php


$mysqli = new mysqli('localhost', 'root', '', 'escuelaucq');








?>
<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de estudiante</h1>
    <form action="guardar_estudiante.php" method="POST">
            <div class="form-group">
                <label for="matricula">Matricula</label>
                <input name="id_alumno" required type="number" id="id_alumno" class="form-control" placeholder="Matricula">
            </div>
            <div class="form-group">
                <label for="folio">Folio Aspirante</label>
        
        <select class="form-control" name="fk_aspirante" required id="fk_aspirante" >
            <option value= 22>Seleccione:</option>
            <?php
             $query = $mysqli -> query ("SELECT id_aspirante FROM aspirante WHERE fk_estatus= 'A'");

             
            while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_aspirante].'">'.$valores[id_aspirante].'</option>';
             }
                 ?>
         </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
     </form>

     
    </div>
</div>
<?php 
echo $valores;
include "pie.php" ?>