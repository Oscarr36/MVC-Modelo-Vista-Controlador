<?php
//Pasa las cosas del controlador aqui para hacer la consulta en la bd


class UsuarioModelo {
    private $db;

    public function __construct(){
        $this->db= new Base;
    }

    public function obtenerDatos(){
        $this->db->query('SELECT * FROM Cliente');
        return $this->db->registros();
    }
}