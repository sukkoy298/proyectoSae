<?php
session_start();

// Usuario y contraseña predefinidos
$usuario = 'admin@hot.com';
$contraseña = '1234';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['correo'];
    $password = $_POST['password'];

    // Comprobar las credenciales
    if ($username === $usuario && $password === $contraseña) {
        // Guardar el nombre de usuario en la sesión
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirigir a la página de inicio
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>"; // Mensaje de error
        header('Location: ../vista/casa.php'); // Redirigir a la página de inicio
    }
}
?>
