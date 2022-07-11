<?php
 ?>
<?php
class Estudiante
{
    private $nombre,$ap_paterno,$ap_materno,$sexo,$edad,$correo,$id_matricula,$fk_estudiante,$fk_materia,$fecha_registro;

    public function __construct($id_matricula= null)
    {
        $this->id_matricula = $id_matricula;
      
        if ($id_matricula) {
            $this->id_matricula = $id_matricula;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiante (id_matricula,nombre,ap_paterno,ap_materno,sexo,edad,correo,fk_instituto)
                VALUES
                (?,?,?,?,?,?,?,?)");
$sentencia->bind_param("issssisi",$this->id_matricula, $this->nombre,$this->ap_paterno,$this->ap_materno,$this->sexo,$this->edad,$this->correo);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT * FROM estudiante");
        return $resultado->fetch_all(MYSQLI_ASSOC);
        
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id_matricula FROM estudiante WHERE id_alumno = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update estudiante set id_matricula = ? where id = ?");
        $sentencia->bind_param("ssi", $this->nombre, $this->grupo, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id_alumno)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM estudiante WHERE id_matricula = ?");
        $sentencia->bind_param("i", $id_matricula);
        $sentencia->execute();
    }
    
}