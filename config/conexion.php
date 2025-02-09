<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=proyecto_sae", "root", "");
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
