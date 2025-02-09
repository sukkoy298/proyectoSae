<?php
include("../config/conexion.php");
include("../models/users.php");

$id = $_SESSION["user_id"];

$extraer = new User();

$extraer->extraer_datos($id);
