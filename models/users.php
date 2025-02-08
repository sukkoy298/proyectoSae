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

    public function __construct($id, $name, $email, $password, $empresa, $ciudad)
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
}
