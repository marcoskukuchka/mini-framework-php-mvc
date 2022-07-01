<?php
//load
$controller = $controlador;
$controlador = ucwords($controlador); // pasa mayusculas la primera letra del parametro controlador

$controllerFile = "controllers/". $controlador . ".php";
if(file_exists($controllerFile)){
    require_once($controllerFile);
    $controlador = new $controlador(); //ver este erroor
    if (method_exists($controlador, $metodo)) {
        $controlador -> $metodo($params);
    }else{
        require_once('controllers/Errors.php');
    }
    
}else{
    require_once('controllers/Errors.php');

}