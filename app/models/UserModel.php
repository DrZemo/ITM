<?php
class UserModel{
    private $db;

    public function __construct(){
        $this->db = new DataBase;
    }

    public function obtenerArticulos(){
        $this->db->query("SELECT * FROM articulos");
        return $this->db->registros();
    }

    public function validarUsuario($cedula,$contraseña){
        $this->db->query("SELECT nombres FROM usuarios WHERE id = '".$cedula."' AND contraseña = '".$contraseña."' ");
        return $this->db->registro();
    }

    public function crearUsuario($c,$n,$a,$p,$m,$d,$e){
        $this->db->query(
            "INSERT INTO usuarios(id,nombres,apellidos,contraseña,email,direccion,edad) 
            VALUES('".$c."','".$n."','".$a."','".$p."','".$m."','".$d."','".$e."')"
        );
        $this->db->ejecutar();
    }
}
?> 