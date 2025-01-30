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
    // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }
}
?>