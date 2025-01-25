<?php
require_once '../modelo/institucion.php';
require_once '../modelo/sistemas.php';
require_once '../modelo/usuario.php';

// Captura los datos del formulario
$nombreInstitucion = $_POST['empresa'];
$nombre = $_POST['nombrePersona'];
$ciudad = $_POST['ciudad'];
$tipoSistema = $_POST['tipoSistema'];
$correo = $_POST['correoElectronico'];
$descripcion = $_POST['descripcion'];

// Crea una nueva instancia de la clase instituto
$instituto = new instituto($nombreInstitucion, $ciudad, $nombre, $correo);

// Crea una nueva instancia de la clase Sistema
$sistema = new Sistema($nombreInstitucion, $ciudad, $tipoSistema, $correo, date("d/m/Y"), "Sin asignar", "En espera", $descripcion);

// Crea una nueva instancia de usuario
$usuario = new Usuario($nombre, "123456", $correo, $nombreInstitucion);
$usuario->agregarSistema($sistema);

// Muestra los datos del objeto instituto
echo "Institución registrada:<br>";
echo "Nombre: " . $instituto->getNombre() . "<br>";
echo "Ciudad: " . $instituto->getCiudad() . "<br>";
echo "Representante: " . $instituto->getRepresentante() . "<br>";
echo "Correo: " . $instituto->getCorreo() . "<br>";

// Muestra los datos del objeto Sistema
echo "<br>Sistema registrado:<br>";
echo "Nombre de la Institución: " . $sistema->getNombre() . "<br>";
echo "Ciudad: " . $sistema->getCiudad() . "<br>";
echo "Tipo de Sistema: " . $sistema->getTipo() . "<br>";
echo "Correo: " . $sistema->getCorreo() . "<br>";
echo "Fecha: " . $sistema->getFecha() . "<br>";
echo "Programador: " . $sistema->getProgramador() . "<br>";
echo "Status: " . $sistema->getStatus() . "<br>";
echo "Requisitos: " . $sistema->getRequisitos() . "<br>";

// Muestra los datos del objeto Usuario
echo "<br>Usuario registrado:<br>";
echo "Correo: " . $usuario->getCorreo() . "<br>";
echo "Contraseña: " . $usuario->getPassword() . "<br>";
echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Institución: " . $usuario->getEmpresa() . "<br>";
echo "Sistemas registrados: " . count($usuario->getSolicitudes()) . "<br>";
