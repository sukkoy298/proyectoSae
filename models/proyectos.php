<?php
include '../config/db.php';

class Proyecto {
    private $conn;
    private $id;
    private $empresa;
    private $ciudad;
    private $tipo;
    private $fecha;
    private $programador;
    private $status;
    private $requisitos;

    public function __construct($id, $empresa, $ciudad, $tipo, $fecha, $programador, $status, $requisitos) {
        $this->conn = connect();
        $this->id = $id;
        $this->empresa = $empresa;
        $this->ciudad = $ciudad;
        $this->tipo = $tipo;
        $this->fecha = $fecha;
        $this->programador = $programador;
        $this->status = $status;
        $this->requisitos = $requisitos;
    }

    public function save() {
        $sql = "INSERT INTO proyectos (empresa, ciudad, tipo, fecha, programador, status, requisitos) VALUES ('$this->empresa', '$this->ciudad', '$this->tipo', '$this->fecha', '$this->programador', '$this->status', '$this->requisitos')";

        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function editar() {
        $sql = "UPDATE proyectos SET empresa = '$this->empresa', ciudad = '$this->ciudad', tipo = '$this->tipo', fecha = '$this->fecha', programador = '$this->programador', status = '$this->status', requisitos = '$this->requisitos' WHERE id = '$this->id'";

        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public static function obtenerProyectoPorId($id) {
        $conn = connect();
        $sql = "SELECT * FROM proyectos WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            return new Proyecto($row['id'], $row['empresa'], $row['ciudad'], $row['tipo'], $row['fecha'], $row['programador'], $row['status'], $row['requisitos']);
        } else {
            return null;
        }
    }

    public static function obtenerTodosLosProyectos($empresa, $ciudad) {
        $conn = connect();
        $sql = "SELECT * FROM proyectos WHERE empresa = '$empresa' AND ciudad = '$ciudad'";
        $result = mysqli_query($conn, $sql);

        $proyectos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $proyectos[] = $row;
        }

        return $proyectos;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getProgramador() {
        return $this->programador;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getRequisitos() {
        return $this->requisitos;
    }


    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setProgramador($programador) {
        $this->programador = $programador;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setRequisitos($requisitos) {
        $this->requisitos = $requisitos;
    }
}
?>