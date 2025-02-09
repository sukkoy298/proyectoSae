<?php include("../models/users.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$empresa = $_POST['empresa'];
$ciudad = $_POST['ciudad'];

$editar = new user();

$editar->editar_usuario($id, $name, $email, $password, $empresa, $ciudad);
