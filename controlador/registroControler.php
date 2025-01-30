<?php
require_once '../modelo/institucion.php';
require_once '../modelo/sistemas.php';
require_once '../modelo/usuario.php';

include('conexion.php');
$conn = connect();

$id = null;
$password = "123456";

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


// Inserta los datos en la base de datos
$sql = "INSERT INTO instituciones (id, nombre, ciudad, nombrePersona, correo) VALUES ('$id', '$nombreInstitucion', '$ciudad', '$nombre', '$correo')";
$sql2 = "INSERT INTO sistemas (id, nombre, ciudad, tipo, correo, fecha, programador, status, requisitos) VALUES ('$id', '$nombreInstitucion', '$ciudad', '$tipoSistema', '$correo', date('d/m/Y'), 'Sin asignar', 'En espera', '$descripcion')";
$sql3 = "INSERT INTO usuarios (id, nombre, password, correo, institucion) VALUES ('$id', '$nombre', '123456', '$correo', '$nombreInstitucion')";
if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
    header('Location: ../vista/dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
