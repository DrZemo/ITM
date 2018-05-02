<?php
//se encargar de cargar los modelos y las vistas
class Controller{
    //Cargar modelo 
    public function model($modelo){
        require_once '../app/models/'.$modelo.'.php';
        return new $modelo();
    }
    //Cargar vista
    public function view($vista, $datos = []){
        if (file_exists('../app/views/'.$vista.'.php')) {
            require_once '../app/views/'.$vista.'.php';
        }else{
            die('the view doesn´t exist');
        }
    }
}
