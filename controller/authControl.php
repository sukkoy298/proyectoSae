<?php
require_once '../models/users.php';

class AuthController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['name']) && isset($_POST['empresa']) && isset($_POST['ciudad'])) {
                // Registro de usuario
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
    public function login(){
        if (isset($_POST['email']) && isset($_POST['password'])) {
                // Autenticación de usuario
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Validar los datos 
                if (empty($email) || empty($password)) {
                    echo "Email y contraseña son obligatorios.";
                    return;
                }

                // Comprobar si el usuario existe
                $user = User::login($email, $password);
                if ($user) {
                    echo "Autenticación exitosa.";
                } else {
                    echo "Email o contraseña incorrectos.";
                }
            } else {
                echo "Datos insuficientes.";
            }
    
    }
}

// Crear una instancia del controlador y llamar al método register
$authController = new AuthController();

if (isset($_POST['login'])){
    $authController->login();
}else{
   $authController->register();
}

?>