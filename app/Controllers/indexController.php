<?php

namespace App\Controllers;
use Src\Controller;

class indexController extends Controller{
   
    public function index(){
        $this->view->render();
    }
    public function mensaje(){
        echo "Esto es un MENSAJE";
    }
}