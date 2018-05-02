<?php
class Articulo{
    private $db;

    public function __construct(){
        $this->db = new DataBase;
    }

    public function obtenerArticulos(){
        $this->db->query("SELECT * FROM articulos");
        return $this->db->registros();
    }
}
?>