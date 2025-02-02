<?php
include '../config/db.php';

class User {
    private $conn;
    private $id;
    private $name;
    private $email;
    private $password;
    private $empresa;
    private $ciudad;

    public function __construct($id, $name, $email, $password, $empresa, $ciudad) {
        $this->conn = connect();
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->empresa = $empresa;
        $this->ciudad = $ciudad;
    }

    public function save() {
        $sql = "INSERT INTO users (name, email, password, empresa, ciudad) VALUES ('$this->name', '$this->email', '$this->password', '$this->empresa', '$this->ciudad')";

        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
}
?>