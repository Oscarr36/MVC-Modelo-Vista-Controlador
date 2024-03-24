<?php 

class Controlador{
    protected $datos = ['rolesPermitidos' => []];

    public function modelo($modelo){
        require_once '../App/modelos/'.$modelo.'.php';
        return new $modelo;
    }

    
//carga la vista
    public function vista($vista, $datos = []){
        //comprobamos si existe el archivo
        if (file_exists('../App/vistas/'.$vista.'.php')){
            require_once '../App/vistas/'.$vista.'.php';
        } else {
            die('la vista no existe');
        }
    }

    //Asincrono
    public function vistaApi($datos){
        header('Acces-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($datos);
        exit();
    }
}