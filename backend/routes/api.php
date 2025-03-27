<?php
require "../controllers/libros.php";

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "GET") {
    obtenerLibros();
} elseif ($requestMethod == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    agregarLibro($data['titulo'], $data['autor'], $data['anio_publicacion']);
} else {
    echo json_encode(["error" => "Método no permitido"]);
}
?>
