<?php

class Home extends Controller{
    
    public function __construct(){
        //$this->articuloModelo = $this->model('Articulo');
        //echo 'controlador de paginas cargado<br>';
    }

    public function index(){
        $datos = [];
        if (!empty($_POST["usuario"])) {
            $datos = [
                'user' => $_POST["usuario"],
            ];
        }
        $this->view('/pages/home',$datos);
    }

}

