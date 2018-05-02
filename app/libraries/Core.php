<?php
/*mapeo de la url obtenida del navegador 
1-controlador 
2-metodo
3-parametro
Ejemplo: /articulos/actualizar/4
*/
class Core{
    protected $controladorActual = 'login';
    protected $metodoActual = 'index';
    protected $parametros = [];

    public function __construct(){
        $url = $this->getUrl(); 
        //echo print_r($this->getUrl());
        
        //buscar si existe en controlador 
        if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
            $this->controladorActual = ucwords($url[0]);
            unset($url[0]); 
        }

        //requerir el controlador 
        require_once '../app/controllers/'.$this->controladorActual.'.php';
        $this->controladorActual = new $this->controladorActual;

        //cherear la segunda parte de la url que seria el metodo 
        if (isset($url[1])) {
            if(method_exists($this->controladorActual, $url[1])){
                $this->metodoActual =$url[1];
                unset($url[1]);
            }
        }
        //echo $this->metodoActual;

        //obtener los osibles parametros 
        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);
        
    }

    public function getUrl(){
        //echo $_GET['url'];
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],"/");
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}
?>