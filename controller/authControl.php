<?php
require_once '../models/users.php';

class AuthController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $id = null;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $empresa = $_POST['empresa'];
            $ciudad = $_POST['ciudad'];

            // Validar los datos 
            if (empty($name) || empty($email) || empty($password) || empty($empresa) || empty($ciudad)) {
                echo "Todos los campos son obligatorios.";
                return;
            }

            // Crear una instancia de User y guardar los datos
            $user = new User($id, $name, $email, $password, $empresa, $ciudad);
            if ($user->save()) {
                echo "Registro exitoso.";
            } else {
                echo "Error al registrar el usuario.";
            }
        }
    }
}




// Crear una instancia del controlador y llamar al método register
$authController = new AuthController();
$authController->register();
?>