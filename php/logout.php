<?php
session_start();
session_destroy(); // Destruir la sesión
header('Location: index.php'); // Redirigir al formulario de inicio de sesión
exit();
?>