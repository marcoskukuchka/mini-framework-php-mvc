<?php
session_start();
require_once('libraries/helpers.php');


$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrayUrl = explode('/', $url);
//localhost/mvc/libros/         producto/       1
//                  controlador     metodo      parametros
//$array = Array ( [0] => usuario [1] => loging [2] => 1 )

$controlador = $arrayUrl[0];
$metodo = $arrayUrl[0];
$params = "";

if (!empty($arrayUrl[1])) {

    $metodo = $arrayUrl[1];
}
if (!empty($arrayUrl[2])) {
    for ($i=2; $i < count($arrayUrl); $i++) { 
        $params .= $arrayUrl[$i] . ','; 
    }
    $params = trim($params, ','); 
    

}


require_once('libraries/core/autoload.php');
require_once('libraries/core/load.php');


