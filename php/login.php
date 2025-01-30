<?php
include('conexion.php');
session_start();
connect();


$sql = "SELECT * FROM usuarios where correo = '$username'";
$result = mysqli_query($conn, $sql);

// Usuario y contraseña predefinidos

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['correo'];
    $password = $_POST['password'];

    // Comprobar las credenciales
    if ($result->num_rows > 0) {
        // Guardar el nombre de usuario en la sesión
        $_SESSION['username'] = $username;
        header('Location: ../vista/dashboard.php'); // Redirigir a la página de inicio
        exit();
    } else {
        echo "<div class='alert alert-danger'>Usuario o contraseña incorrectos.</div>";
    }
}
