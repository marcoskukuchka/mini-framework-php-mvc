<?php
class Views{
    function obtenerVista($controlador, $vista,$data = ""){
        $controlador = get_class($controlador);
        if ($controlador == "Home") {
            $vista = "views/" . $vista . ".php";
        }else{
            $vista = "views/" .strtolower($controlador) . "/" . $vista .".php";
        }
        require_once($vista);


    }
}