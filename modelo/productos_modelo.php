<?php

class Productos_modelo{
    private $db; //conexion con la bbdd
    private $datos; //registros recuperados de la bbdd

    public function __construct() {
        require_once("modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this->datos = array();
    }

    public function get_datos() {
        $sql = "SELECT * FROM productos";
        $consulta = $this->db->query($sql);
        while($registro = $consulta->fetch_assoc()) {
            $this->datos[] = $registro;
        }
        return $this->datos;
    }
}

?>