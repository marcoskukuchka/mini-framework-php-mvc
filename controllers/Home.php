<?php
class Home extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function home(){
        $datos = array();

        $datos['mostrar'] = $this -> modelo -> obtenerUsuario();
        
        $this -> vista -> obtenerVista($this,strtolower(get_class($this)), $datos);
    }

    
    public function insertarUsuario(){
        $datos = array();
        $datos['insertar'] = $this -> modelo -> insertarUsuario('marcos');
        
        $this -> vista -> obtenerVista($this,strtolower(get_class($this)), $datos);
    }
    public function modificarUsuario(){
        $datos = array();
        $datos['actualizar'] = $this -> modelo -> modificarUsuario(1, 'andres');
        
        $this -> vista -> obtenerVista($this,strtolower(get_class($this)), $datos);
    }
    public function eliminarUsuario(){
        $datos = array();
        $datos['eliminar'] = $this -> modelo -> eliminarUsuario(1);
        
        $this -> vista -> obtenerVista($this,strtolower(get_class($this)), $datos);
    }
}
