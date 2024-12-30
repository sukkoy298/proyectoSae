<?php
class instituto{
    //propiedades
    public $nombre;
    public $ciudad;
    public $representante;
    public $correo;
    public $contrasena;

    //cosntructor
    public function __construct($nombre, $ciudad, $representante, $correo, $contrasena) {
        $this -> nombre= $nombre;
        $this -> ciudad = $ciudad;
        $this -> representante = $representante;
        $this -> correo = $correo;
        $this -> contrasena = $contrasena;
    }

    //metodos
    public function registrar(){
        
    }
}

?>