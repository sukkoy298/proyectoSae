<?php
require_once '../models/users.php';

class AuthController
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['name']) && isset($_POST['empresa']) && isset($_POST['ciudad'])) {
                // Validación de campos obligatorios
                $requiredFields = ['name', 'email', 'password', 'empresa', 'ciudad'];
                foreach ($requiredFields as $field) {
                    if (empty($_POST[$field])) {
                        $this->redirectWithError("Todos los campos son obligatorios.", '../views/register.php');
                        return;
                    }
                }

                // Asignación de valores
                $id = null;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $empresa = $_POST['empresa'];
                $ciudad = $_POST['ciudad'];

                // Validar email único
                if (User::exists($email)) {
                    $this->redirectWithError("Este correo ya está registrado: $email", '../views/register.php');
                    return;
                }

                // Crear y guardar usuario
                $user = new User($id, $name, $email, $password, $empresa, $ciudad);
                if ($user->save()) {
                    $this->redirectWithSuccess("Usuario $email registrado correctamente", '../views/login.php');
                } else {
                    $this->redirectWithError("Error al registrar el usuario", '../../index.php');
                }
            }
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validación de campos
            if (empty($_POST['email']) || empty($_POST['password'])) {
                $this->redirectWithError("Email y contraseña son obligatorios.", '../views/login.php');
                return;
            }

            $email = $_POST['email'];
            $password = $_POST['password'];

            // Autenticación
            $user = User::login($email, $password);
            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user->getId();
                $_SESSION['user_email'] = $user->getEmail();
                $_SESSION['user_empresa'] = $user->getEmpresa();
                $_SESSION['user_ciudad'] = $user->getCiudad();
                $_SESSION['is_admin'] = $user->isAdmin(); // Asumiendo método isAdmin() en User

                // Redirección según rol
                if ($_SESSION['is_admin']) {
                    header("Location: ../views/dashboard-admin.php");
                } else {
                    header("Location: ../views/dashboard.php?" . http_build_query([
                        'name' => $user->getName(),
                        'empresa' => $user->getEmpresa(),
                        'ciudad' => $user->getCiudad()
                    ]));
                }
                exit();
            }

            $this->redirectWithError("Credenciales incorrectas", '../views/login.php');
        }
    }

    private function redirectWithError($message, $url)
    {
        echo "<script>
            alert('$message');
            window.location.href = '$url';
        </script>";
        exit();
    }

    private function redirectWithSuccess($message, $url)
    {
        echo "<script>
            alert('$message');
            window.location.href = '$url';
        </script>";
        exit();
    }
}

// Manejo de solicitudes
$authController = new AuthController();

if (isset($_POST['login'])) {
    $authController->login();
} elseif (isset($_POST['register'])) {
    $authController->register();
} elseif (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
}