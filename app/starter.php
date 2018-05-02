<?php
//Load libraries
require_once 'config/config.php';
//Autoload php

spl_autoload_register(function($nombreClase){
    require_once 'libraries/'.$nombreClase.'.php';
});
?>
