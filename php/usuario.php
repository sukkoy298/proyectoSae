<?php
class Usuario {
    protected $nombre;
    protected $password;
    protected $correo;
    protected $empresa;
    protected $solicitudes; // Arreglo de sistema

    // Constructor
    public function __construct($nombre, $password, $correo, $empresa) {
        $this->nombre = $nombre;
        $this->password = $password;
        $this->correo = $correo;
        $this->empresa = $empresa;
        $this->solicitudes = array(); // Inicializar como un arreglo vacío
    }

    // Método para agregar un sistema al arreglo de solicitudes
    public function agregarSistema(Sistema $sistema) {
        $this->solicitudes[] = $sistema;
    }

    // Método para obtener el arreglo de sistemas
    public function getSolicitudes() {
        return $this->solicitudes;
    }
}
?>