<?php
function conectarBD() {
    $conn = new mysqli("localhost", "root", "", "biblioteca");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    return $conn;
}
?>
