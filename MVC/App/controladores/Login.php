<?php

class Login extends Controlador {

    
    public function __construct(){

    }
    public function index(){

            $this->vista('login' , $this->datos);
    }
}