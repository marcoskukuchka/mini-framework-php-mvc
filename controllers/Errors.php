<?php
class Errors extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }
    public function errors(){
        $this->vista->obtenerVista($this, 'errors');
    }

    

}
$noEncontrado = new Errors();
$noEncontrado ->errors();
