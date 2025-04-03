<?php
require "../controllers/libros.php";

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "GET") {
    $seccion = $_GET["seccion"];
    if($seccion == "libros"){
    obtenerLibros();
} else if ($seccion == "usuarios") {
echo "Acá llamaremos al JSON de usuarios";
}
}