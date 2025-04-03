<?php
require "../controllers/libros.php";
require "../controllers/usuarios.php";

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "GET") {
    $seccion = $_GET["seccion"] ?? null;
    
    if ($seccion == "libros") {
        obtenerLibros();
    } else if ($seccion == "usuarios") {
        obtenerUsuarios();
    } else if ($seccion == "prestamos") {
        echo "Acá llamaremos al JSON de préstamos";
    } else {
        echo "Sección no válida o no especificada.";
    }
}
?>
