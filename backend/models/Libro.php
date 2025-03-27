<?php
class Libro {
    public $id;
    public $titulo;
    public $autor;
    public $anio_publicacion;

    public function __construct($id, $titulo, $autor, $anio_publicacion) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio_publicacion = $anio_publicacion;
    }
}
?>