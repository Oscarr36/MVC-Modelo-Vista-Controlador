<?php

// mapear la url ingresada en el navegador
// 1- Controlador
// 2- Metodo
// 3- parametros
// Ejemplo:/articulo/actualizar/4
class Core{
    protected $controladorActual = 'Inicio';
    protected $metodoActual = 'index';
    protected $parametros=[];

    public function __construct(){
        $url = $this->getUrl();

        if(isset($url[0])){
            //busca en controladores si el controlador existe
            if (file_exists('../App/controladores/'.ucwords($url[0]).'.php')){
            //Se configura omo controlador por defecto
            $this->controladorActual = ucwords($url[0]);
            //eliminamos la primera posicion de la url 
            unset($url[0]);
            //print_r($url);

            } else {
               // echo 'No existe';

            }
        }
        require_once '../App/controladores/'.$this->controladorActual.'.php';
        $this->controladorActual = new $this->controladorActual;
        
        //Obtener la segunda parte de la url: el metodo
        if (isset($url[1])){
            if(method_exists($this->controladorActual,$url[1])){
                $this->metodoActual=$url[1];
                unset($url[1]);
            } else {
               // echo"El metodo no existe";
                //exit;
            }//Esto solo para desarrollador y saber que lo que llamo no exite 

        }

        //Obtener los parametros 
        $this->parametros = $url ? array_values($url) : [];

        //LLamamos al metodo controlador 
        call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);
    }
    
    //Tranforma URL en ARRAY
    private function getUrl(){
        if(isset($_GET['url'])){

            $url=$_GET['url'];

            $url = filter_var($url, FILTER_SANITIZE_URL); //Elimina caracteres raros de la url

            $url = rtrim($url,'/'); // Quita la / del final
            $url = ltrim($url , '/'); // Quita la / del principio
            $url_array = explode("/", $url); // Genera un Array con los separadores

            return $url_array;
        }
    }

}
