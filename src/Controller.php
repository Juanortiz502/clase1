<?php
namespace Src;
use Illuminate\Database\Capsule\Manager as Capsule;

abstract class Controller{
    protected $view;
    public $args;
    public function __construct($args){
        $this->view = new View();
        $this->args = $args;
    }

    abstract function index();

    public function Model($nameModel){
        

    }

}