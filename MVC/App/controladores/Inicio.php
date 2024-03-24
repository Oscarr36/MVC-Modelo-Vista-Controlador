<?php

class Inicio extends Controlador {
    private $usuarioModelo;

    public function __construct(){
           $this->usuarioModelo = $this->modelo('UsuarioModelo');
    }
    public function index(){
            $this->datos['datos'] = $this->usuarioModelo->obtenerDatos();

            $this->vista('index' , $this->datos);
    }
}