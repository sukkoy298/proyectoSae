<?php 
require_once("institucion.php");
require_once("sistemas.php");
require_once("usuario.php");

$institutoEjemplo = new instituto("Instituto Tecnológico de lara", "Barquisimeto", "Ing. Juan Pérez", "correoelectronico@gmail.com");
$sistemaEjemplo = new Sistema("Instituto Tecnológico de lara", "Barquisimeto", "Educación", "correoelectronico@gmail.com", "2/1/2025", "En espera", "Requisitos del sistema", "Argumento adicional");
$usuarioEjemplo = new Usuario("Juan Pérez", "123456", "correoelectronico@gmail.com", "Instituto Tecnológico de lara");
$usuarioEjemplo->agregarSistema($sistemaEjemplo);
?>