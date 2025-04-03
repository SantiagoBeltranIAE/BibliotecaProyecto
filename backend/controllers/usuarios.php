<?php
require "../config/database.php"; 

function obtenerUsuarios() {
    $conn = conectarBD();
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);
    $usuarios = [];

    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }

    echo json_encode($usuarios);
    $conn->close();
}

function agregarUsuario($nombre, $email, $telefono) {
    $conn = conectarBD();
    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $email, $telefono);
    
    if ($stmt->execute()) {
        echo json_encode(["mensaje" => "Usuario agregado con éxito"]);
    } else {
        echo json_encode(["error" => "Error al agregar el usuario"]);
    }

    $stmt->close();
    $conn->close();
}
?>
