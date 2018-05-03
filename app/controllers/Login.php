<?php
class Login extends Controller{
    public function __construct(){
        $this->modeloLogin = $this->model('UserModel');
        $this->session = new Sessions();
        //echo 'controlador de paginas cargado<br>';
    }

    public function index(){
        $this->view('/pages/login');
    }

    public function iniciarSeccion(){
        $cedula = $_POST["cedula"];
        $contraseña = $_POST["contraseña"];
        $usuario = $this->modeloLogin->validarUsuario($cedula,$contraseña);
        $this->session->init();
        $this->session->add('user',$usuario->nombres);
        header('Location: /ITM/HOME');
        var_dump($this->session->getAll());
        //$this->view('/pages/home');
    }

    public function cerrarSeccion(){
        $this->session->close();
        header('Location: /ITM/HOME');
    }
    
}

