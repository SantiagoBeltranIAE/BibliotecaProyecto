<?php
class Usuario {
    public $id;
    public $nombre;
    public $email;
    public $telefono;

    public function __construct($id, $nombre, $email, $telefono) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }
}
?>
