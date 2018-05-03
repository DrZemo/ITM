<?php

class Checkin extends Controller{
    public function __construct(){
        $this->modeloChiecin = $this->model('UserModel');
        //echo 'controlador de paginas cargado<br>';
    }

    public function index(){
        $datos = [];
        if (!empty($_POST)) {
            $datos = [
                'user' => $_POST["usuario"],
            ];
        }
        $this->view('/pages/checkin');
    }

    public function registrarDatos(){
        $cedula = $_POST["cedula"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $contraseña = $_POST["contraseña"];
        $email = $_POST["email"];
        $direccion = $_POST["direccion"];
        $confirmarContraseña = $_POST["confirmarContraseña"];
        
        if (!empty($_POST["edad"])) {
            $edad = $_POST["edad"];
        }else {
            $edad = "0";
        }

        if ($contraseña == $confirmarContraseña) {
            $this->modeloChiecin->crearUsuario($cedula,$nombres,$apellidos,$contraseña,$email,$direccion,$edad);
            header('Location: /ITM/HOME');
        }else{
            header('Location: /ITM/HOME');
        }
        
    }
}