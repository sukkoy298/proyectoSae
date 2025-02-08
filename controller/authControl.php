<?php
require_once '../models/users.php';

class AuthController
{
    public function register()
    {
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

                if (User::exists($email)) {
                    print "este correo ya esta vinculado a una cuenta: " . $email;
                    print " ...volviendo al registro";
?>
                    <meta http-equiv="refresh" content="5;url=../views/register.php">
                    <?php
                    return;
                } else {
                    // Crear una instancia de User y guardar los datos
                    $user = new User($id, $name, $email, $password, $empresa, $ciudad);
                    if ($user->save()) {
                        print "usuario " . $email . "registrado correctamente";
                        print " ...volviendo a inicio de sesion";
                    ?>
                        <meta http-equiv="refresh" content="5;url=../views/login.php">
                    <?php
                    } else {
                        echo "Error al registrar el usuario.";
                    ?>
                        <meta http-equiv="refresh" content="5;url=../../index.php">
                <?php
                    }
                }
            }
        }
    }
    public function login()
    {
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
                // Iniciar sesión
                session_start();
                $_SESSION['user_id'] = $user->getId();
                $_SESSION['user_email'] = $user->getEmail();
                $_SESSION['user_empresa'] = $user->getEmpresa();
                $_SESSION['user_ciudad'] = $user->getCiudad();

                // Redirigir según el rol del usuario
                if ($user->getEmail() === 'admin@example.com') {
                    header("Location: ../views/admin_dashboard.php");
                } else {
                    $name = $user->getName();
                    $empresa = $user->getEmpresa();
                    $ciudad = $user->getCiudad();
                    header("Location: ../views/dashboard.php?name=$name&empresa=$empresa&ciudad=$ciudad");
                }
                exit();
            } else {
                echo "Email o contraseña incorrectos: " . $email . " - " . $password;
                ?>
                <meta http-equiv="refresh" content="5;url=../views/login.php">
<?php
            }
        } else {
            echo "Datos insuficientes.";
        }
    }
}


// Crear una instancia del controlador y llamar al método register
$authController = new AuthController();

if (isset($_POST['login'])) {
    $authController->login();
} else {
    $authController->register();
}
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: ../index.php");
}
