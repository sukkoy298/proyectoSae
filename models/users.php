<?php
include '../config/db.php';

class User
{
    private $conn;
    private $id;
    private $name;
    private $email;
    private $password;
    private $empresa;
    private $ciudad;

    public function __construct($id = null, $name = null, $email = null, $password  = null, $empresa  = null, $ciudad  = null)
    {
        $this->conn = connect();
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->empresa = $empresa;
        $this->ciudad = $ciudad;
    }

    public static function exists($email)
    {
        $conn = connect();
        $query = "SELECT COUNT(*) as count FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $count > 0;
    }

    public function save()
    {
        $sql = "INSERT INTO users (name, email, password, empresa, ciudad) VALUES ('$this->name', '$this->email', '$this->password', '$this->empresa', '$this->ciudad')";

        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public static function login($email, $password)
    {
        $conn = connect();
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $query = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($query);

        if ($user && $password === $user['password']) { // Comparar la contraseña sin hash
            return new User($user['id'], $user['name'], $user['email'], $user['password'], $user['empresa'], $user['ciudad']);
        } else {
            return false;
        }
    }

    public static function findByEmail($email)
    {
        $conn = connect();
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return new User($row['id'], $row['name'], $row['email'], $row['password'], $row['empresa'], $row['ciudad']);
        } else {
            return null;
        }
    }

    public function extraer_datos($id)
    {
        include("../config/conexion.php");
        try {
            $usuario = $con->prepare("SELECT * FROM users WHERE id = ?");
            $usuario->execute([$id]);
            $datos = $usuario->fetch(PDO::FETCH_ASSOC);
?>
            <div class="container">
                <h1 style="margin-top:1.5rem; margin-bottom:1.5rem;">Configuracion de la cuenta</h1>
                <form action="edit_cuenta.php" method="POST">
                    <input type="hidden" value="<?php print $id; ?>" name="id">
                    <div class="mb-3">
                        <label for="name">Nombre: </label>
                        <input type="text" value="<?php print $datos["name"] ?>" name="name" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email: </label>
                        <input type="text" value="<?php print $datos["email"] ?>" name="email" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="password">Contraseña: </label>
                        <input type="text" value="<?php print $datos["password"] ?>" name="password" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="empresa">Empresa: </label>
                        <input type="text" value="<?php print $datos["empresa"] ?>" name="empresa" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="ciudad">Ciudad: </label>
                        <input type="text" value="<?php print $datos["ciudad"] ?>" name="ciudad" class="form-control" readonly>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">editar</button>
                </form>
                <form action="../controller/eliminar_cuenta_controller.php" method="POST">
                    <input type="hidden" value="<?php echo $id ?>" name="id" readonly>
                    <button type="submit" class="btn btn-danger">eliminar cuenta</button>
                </form>
            </div>
        <?php
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function editar_usuario($id, $name, $email, $password, $empresa, $ciudad)
    {
        try {
            include("../config/conexion.php");
            $editar = $con->prepare("UPDATE users SET name = ?, email = ?, password =?, empresa = ?, ciudad = ? WHERE id = ?");
            $editar->execute([$name, $email, $password, $empresa, $ciudad, $id]);
        ?>
            <p>cuenta editada con exito... volviendo a ajustes de la cuenta</p>
            <meta http-equiv="refresh" content="5;url=../views/configuracion_cuenta.php">
        <?php
        } catch (PDOException) {
        };
    }

    public function eliminar_usuario($id)
    {
        try {
            include("../config/conexion.php");
            $eliminar = $con->prepare("DELETE FROM users WHERE id = ?");
            $eliminar->execute([$id]);
        ?>
            <p>cuenta eliminada con exito... volviendo a login</p>
            <meta http-equiv="refresh" content="5;url=../views/login.php">
<?php
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
}
