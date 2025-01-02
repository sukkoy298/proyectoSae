<?php
class Sistema {
    private $instituciones = [];
    private $usuarios = [];

    public function registrarInstitucion($nombre, $email, $ciudad, $representante, $mensaje){
        $instituto = new Instituto($nombre, $email, $ciudad, $representante, $mensaje);
        $this->instituciones[] = $instituto;
        return $instituto;
    }

    public function aceptarSolicitud($institucion, $solicitud) {
        // Lógica para aceptar la solicitud
        $institucion->agregarSolicitud($solicitud);
        // Crear cuenta para la institución
        $this->crearCuenta($institucion);
        // Informar sobre el progreso
        $this->informarProgreso($institucion);
    }

    private function crearCuenta($institucion) {
        // Lógica para crear una cuenta en el sistema
    }

    private function informarProgreso($institucion) {
        // Lógica para informar el progreso del proyecto
    }
}
?>