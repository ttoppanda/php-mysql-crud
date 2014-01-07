<?php

date_default_timezone_set("America/Bogota");
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);//Separador dependiendo del sistema operativo
define('ROOT', realpath(dirname(__FILE__)) . DS);//Ruta raiz del aplicativo

try{

    require_once ROOT . 'Launching.php';
    require_once ROOT . 'controller/Controller.php';
    require_once ROOT . 'view/View.php';

    new Launching($_GET);

    
}
catch(Exception $e){
    echo $e->getMessage();  
}