<?php
class Usuario {
    protected $nombre;
    protected $email;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    // Métodos comunes para todos los usuarios
}

class Programador extends Usuario {
    private $proyectos = [];

    public function agregarProyecto($proyecto) {
        $this->proyectos[] = $proyecto;
    }

    // Métodos específicos para programadores
}
?>