<?php

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $db = "proyecto_sae";

    $conn = mysqli_connect($servername, $username, $password, $db);

    mysqli_select_db($conn, $db);
    return $conn;
};

?>