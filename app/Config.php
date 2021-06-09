<?php
namespace App;

class Config{
    private $_controller, $_method;
    public function __construct(){
        //Controlador por Defecto
        //Metodo por Defecto
        //Argumentos Vacios
        $this->_controller = "index";
        $this->_method = "index";
    }

    public function getControllerDefault(){
        return $this->_controller;
    }
    public function getMethodDefault(){
        return $this->_method;
    }
    public static function getPath(){
        return realpath($_SERVER['DOCUMENT_ROOT']);
    }
}