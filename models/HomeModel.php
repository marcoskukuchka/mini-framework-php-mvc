<?php
class HomeModel extends Sql{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insertarUsuario($nombre){
        $consulta = "INSERT INTO test(nombre) VALUES(?)";
        $arrayValores = array($nombre);
        $respuesta = $this -> insertar($consulta, $arrayValores);
        return $respuesta;
    }

    public function obtenerUsuario(){
        $consulta = "SELECT * FROM test";
        $respuesta = $this -> seleccionarTodos($consulta);
        return $respuesta;
    }

    public function modificarUsuario($id, $nombre){
        $consulta = "UPDATE test set nombre = ? WHERE id = $id";
        $arrayDatos = array($nombre);
        $respuesta = $this -> actualizar($consulta, $arrayDatos);
        return $respuesta;
    }
    
    public function eliminarUsuario($id){
        $consulta = "DELETE from test WHERE id = $id";
        $respuesta = $this -> eliminar($consulta);
        return $respuesta;
    }
      
    
}