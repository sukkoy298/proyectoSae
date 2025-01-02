<?php
class Usuario {
    protected $nombre;
    protected $email;
    protected $password;
    protected $correo;
    protected $empresa;
    protected $solicitudes; // Arreglo de sistemas

    // Constructor
    public function __construct($nombre, $email, $password, $correo, $empresa) {
        $this->nombre = $nombre;
        $this->email = $email;
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