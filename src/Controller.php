<?php
namespace Src;
use Illuminate\Database\Capsule\Manager as Capsule;

abstract class Controller{
    protected $view;
    public function __construct(){
        $this->view = new View();
    }

    abstract function index();

    public function Model($nameModel){
        

    }

}