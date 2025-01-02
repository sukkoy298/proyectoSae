<?php
class Sistema {
    //propiedades
    public $nombre; //de la institucion
    public $ciudad;
    public $tipo;
    public $correo; //con este se le crea un usuario si se acepta el proyecto
    public $fecha;
    public $programador; // asignado despues del formulario inicial
    public $status;
    public $requisitos; //mensaje de los requerimientos

    //constructor
    public function __construct($nombre, $ciudad, $tipo, $correo, $fecha, $programador, $status, $requisitos) {
        $this -> nombre = $nombre;
        $this -> ciudad = $ciudad;
        $this -> tipo = $tipo;
        $this -> correo = $correo;
        $this -> fecha = $fecha;
        $this -> programador = $programador;
        $this -> status = $status;
        $this -> requisitos = $requisitos;
    }

    public function solicitudDeSistema($nombre, $ciudad, $tipo, $correo, $requisitos) {
        $this -> nombre = $nombre;
        $this -> ciudad = $ciudad;
        $this -> tipo = $tipo;
        $this -> correo = $correo;
        $this -> requisitos = $requisitos;
        $this -> fecha = date("d/m/Y");
        $this -> programador = "Sin asignar";
        $this -> status = "En espera";
    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function getCiudad() {
        return $this -> ciudad;
    }

    public function getTipo() {
        return $this -> tipo;
    }

    public function getCorreo() {
        return $this -> correo;
    }

    public function getFecha() {
        return $this -> fecha;
    }

    public function getProgramador() {
        return $this -> programador;
    }

    public function getStatus() {
        return $this -> status;
    }

    public function getRequisitos() {
        return $this -> requisitos;
    }

    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }

    public function setCiudad($ciudad) {
        $this -> ciudad = $ciudad;
    }

    public function setTipo($tipo) {
        $this -> tipo = $tipo;
    }

    public function setCorreo($correo) {
        $this -> correo = $correo;
    }

    public function setFecha($fecha) {
        $this -> fecha = $fecha;
    }

    public function setProgramador($programador) {
        $this -> programador = $programador;
    }

    public function setStatus($status) {
        $this -> status = $status;
    }

    public function setRequisitos($requisitos) {
        $this -> requisitos = $requisitos;
    }

    public function asignarProgramador($programador) {
        $this -> programador = $programador;
    }

    

}
?>