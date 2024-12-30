<?php
class instituto{
    //propiedades
    public $nombre;
    public $ciudad;
    public $representante;
    public $correo;

    //cosntructor
    public function __cosntruct($nombre, $ciudad, $representante, $correo) {
        $this -> nombre= $nombre;
        $this -> ciudad = $ciudad;
    }
}

?>