<?php
 ?>
<?php
class Carrera
{
    private $carrera, $fk_plan, $fk_facultad, $fk_campus, $id_carrera;

    public function __construct($carrera, $fk_plan, $fk_facultad, $fk_campus,$id_carrera = null)
    {
        $this->carrera = $carrera;
        $this->fk_plan = $fk_plan;
        $this->fk_facultad = $fk_facultad;
        $this->fk_campus = $fk_campus;
       
        if ($id_carrera) {
            $this->id_carrera = $id_carrera;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO carrera
            (carrera, fk_plan,fk_facultad,fk_campus)
                VALUES
                (?,?,?,?)");
        $sentencia->bind_param("ssii", $this->carrera, $this->fk_plan, $this->fk_facultad, $this->fk_campus);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id_carrera, carrera, fk_plan,fk_facultad,fk_campus FROM carrera");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id_carrera)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id_carrera, carrera, fk_plan,fk_facultad,fk_campus FROM carrera WHERE id_carrera = ?");
        $sentencia->bind_param("i", $id_carrera);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update carrera set carrera = ?, fk_plan = ?, fk_facultad = ?, fk_campus = ? where id_carrera = ?");
        $sentencia->bind_param("ssiii", $this->carrera, $this->fk_plan, $this->fk_facultad, $this->fk_campus,$this->id_carrera);
        $sentencia->execute();
    }

    public static function eliminar($id_carrera)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM carrera WHERE id_carrera = ?");
        $sentencia->bind_param("i", $id_carrera);
        $sentencia->execute();
    }
}