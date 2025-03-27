<?php
require "../config/database.php"; // Conexión a la BD

function obtenerLibros() {
    $conn = conectarBD();
    $sql = "SELECT * FROM libros";
    $result = $conn->query($sql);
    $libros = [];

    while ($row = $result->fetch_assoc()) {
        $libros[] = $row;
    }

    echo json_encode($libros);
    $conn->close();
}

function agregarLibro($titulo, $autor, $anio_publicacion) {
    $conn = conectarBD();
    $sql = "INSERT INTO libros (titulo, autor, anio_publicacion) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $titulo, $autor, $anio_publicacion);
    
    if ($stmt->execute()) {
        echo json_encode(["mensaje" => "Libro agregado con éxito"]);
    } else {
        echo json_encode(["error" => "Error al agregar el libro"]);
    }

    $stmt->close();
    $conn->close();
}
?>