<?php

class Conexion{
    private $conexion;
    private $host = '';
    private $db = '';
    private $user = '';
    private $pass = '';

    public function __construct(){
        $stringConexion = "mysql:host=" . $this->host .";dbname=" . $this->db .";charset=utf8";        
        try {
            $this -> conexion = new PDO($stringConexion, $this->user, $this->pass);
            $this -> conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
        } catch (PDOException $th) {
            $this -> conexion = 'Error de conexion';
            echo "ERROR!!!: " . $th -> getMessage();
        }
    
    }
    
    public function conectar(){
        return $this -> conexion;
    }
}
