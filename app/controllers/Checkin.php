<?php

class Checkin extends Controller{
    public function __construct(){
        //$this->articuloModelo = $this->model('Articulo');
        //echo 'controlador de paginas cargado<br>';
    }

    public function index(){
        $datos = [];
        if (!empty($_POST)) {
            $datos = [
                'user' => $_POST["usuario"],
            ];
        }
        $this->view('/pages/checkin',$datos);
    }
}