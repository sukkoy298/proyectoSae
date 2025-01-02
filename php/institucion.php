<?php
class instituto{
    //propiedades
    public $nombre;
    public $ciudad;
    public $representante;
    public $correo;
    public $mensaje;

    //cosntructor
    public function __construct($nombre, $ciudad, $representante, $correo, $mensaje) {
        $this -> nombre= $nombre;
        $this -> ciudad = $ciudad;
        $this -> representante = $representante;
        $this -> correo = $correo;
        $this -> mensaje = $mensaje;
    }

    //metodos
    public function registrar(){
        
    }

    public function getNombre(){
        return $this -> nombre;
    }

    public function getCiudad(){
        return $this -> ciudad;
    }

    public function getRepresentante(){
        return $this -> representante;
    }

    public function getCorreo(){
        return $this -> correo;
    }

    public function getMensaje(){
        return $this -> mensaje;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function setCiudad($ciudad){
        $this -> ciudad = $ciudad;
    }

    public function setRepresentante($representante){
        $this -> representante = $representante;
    }

    public function setCorreo($correo){
        $this -> correo = $correo;
    }

    public function setMensaje($mensaje){
        $this -> mensaje = $mensaje;
    }

}

?>