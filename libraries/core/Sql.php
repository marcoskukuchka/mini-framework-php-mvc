<?php


class Sql extends Conexion{
    
    private $consulta;
    private $arrayValores;

    public function __construct(){
        $this -> conexion = new Conexion();
        $this -> conexion = $this -> conexion -> conectar();
    }

    public function insertar(string $consulta, array $arrayValores){
        $this -> consulta = $consulta;
        $this -> arrayVaores = $arrayValores;

        $insert = $this -> conexion -> prepare($this -> consulta);
        $resultadoInsert = $insert -> execute($this -> arrayVaores);
        
        if ($resultadoInsert) {
            $ultimoInsert = $this -> conexion -> lastInsertId();
        }else{
            $ultimoInsert = 0;
        }
        return $ultimoInsert;
    }

    
    public function seleccionar(string $consulta){
        $this -> consulta = $consulta;
       $resultado = $this -> conexion -> prepare($this -> consulta);
       $resultado -> execute();
       $datos = $resultado -> fetch(PDO::FETCH_ASSOC);
       return $datos; 
    }

    
    public function seleccionarTodos(string $consulta){
        $this -> consulta = $consulta;
       $resultado = $this -> conexion -> prepare($this -> consulta);
       $resultado -> execute();
       $datos = $resultado -> fetchall(PDO::FETCH_ASSOC);
       return $datos; 
    }

    
    public function actualizar(string $consulta, array $arrayValores){
        $this -> consulta = $consulta;
        $this ->arrayValores = $arrayValores;
        $actualizar = $this -> conexion -> prepare($this -> consulta);
        $resultado = $actualizar -> execute($this -> arrayValores);
        return $resultado;
    }


    public function eliminar(string $consulta){
        $this -> consulta = $consulta;
        $resultado = $this -> conexion -> prepare($this -> consulta);
        $datos =$resultado ->execute();
        return $datos;
    }
    
    public function contar(string $consulta){
        $this -> consulta = $consulta;
       $resultado = $this -> conexion -> prepare($this -> consulta);
       $resultado -> execute();
       $datos = $resultado -> rowCount();
       return $datos; 
    }



}
