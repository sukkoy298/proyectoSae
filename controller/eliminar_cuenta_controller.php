<?php include("../models/users.php");

$id = $_POST["id"];

$eliminar = new user();

$eliminar->eliminar_usuario($id);
