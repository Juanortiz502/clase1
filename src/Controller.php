<?php
namespace Src;

abstract class Controller{
    protected $view;
    public function __construct(){
        $this->view = new View();
    }

    abstract function index();

    public function Model($nameModel){

    }

}