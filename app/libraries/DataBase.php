<?php
class DataBase{
    private $host = DB_HOTS;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;

    private $dbh;
    private $sttmt;
    private $error;

    public function __construct(){
        //configurar la conexion 
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->name;
        $opciones =  array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        //crear una instancia PDO

        try{
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$opciones);
            $this->dbh->exec('set names utf8');
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql){
        $this->sttmt = $this->dbh->prepare($sql);
    }

    public function bind($parametro,$valor,$tipo = null){
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor) :
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor) :
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor) :
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_NULL;
                    break;
            }
        }
        $this->sttmt->bindValue($parametro,$valor,$tipo);
    }

    public function ejecutar(){
        return $this->sttmt->execute();
    }

    //obtener registros 
    public function registros(){
        $this->ejecutar();
        return $this->sttmt->fetchAll(PDO::FETCH_OBJ);
    }
    //obtener un solo registro
    public function registro(){
        $this->ejecutar();
        return $this->sttmt->fetch(PDO::FETCH_OBJ);
    }
    //obtener la cantidad de filas con el metodo rowCount
    public function rowCount(){
        $this->ejecutar();
        return $this->sttmt->rowCount();
    }

}
?>