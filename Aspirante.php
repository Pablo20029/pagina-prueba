<?php
 ?>
<?php
class Aspirante
{
    private $nombre,$ap_paterno,$ap_materno,$sexo,$edad,$correo,$id_matricula,$fk_estudiante,$fk_materia,$fecha_registro;



    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiante (id_matricula,nombre,ap_paterno,ap_materno,sexo,edad,correo,fk_instituto)
                VALUES
                (?,?,?,?,?,?,?,?)");
        $sentencia->bind_param("issssisi",$this->id_matricula, $this->nombre,$this->ap_paterno,$this->ap_materno,$this->sexo,$this->edad,$this->correo,$this->fk_instituto);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT * from estudiante");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id_aspirante)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT * FROM estudiante WHERE id_matricula = ?");
        $sentencia->bind_param("i", $id_matricula);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE aspirante set nombre = ?, apellido_p = ?,apellido_m = ?,fecha_nac = ?,direccion = ?,telefono = ?,correo = ?,fk_genero = ?,fk_pais = ?,fk_estado = ?, fk_municipio = ?, fk_carrera = ?, fk_institucion = ?,fk_estatus = ? where id_aspirante = ?");
        $sentencia->bind_param("sssssssiiiiiisi", $this->nombre,$this->apellido_p,$this->apellido_m,$this->fecha_nac, $this->direccion,$this->telefono,$this->correo,$this->fk_genero,$this->fk_pais,$this->fk_estado,$this->fk_municipio,$this->fk_carrera,$this->fk_institucion,$this->fk_estatus,$this->id_aspirante);
        $sentencia->execute();
    }

    public static function eliminar($id_aspirante)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM aspirante WHERE id_aspirante = ?");
        $sentencia->bind_param("i", $id_aspirante);
        $sentencia->execute();
    }
}
