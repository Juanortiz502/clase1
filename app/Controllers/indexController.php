<?php

namespace App\Controllers;
use Src\Controller;
use App\Models\User;

//BORRAR
use Src\Model;

class indexController extends Controller{
   
    public function index(){
        $model = new Model();
        $users = User::all(); 
        print_r($users);
        $this->view->render();
    }
    public function mensaje(){
       $this->view->render('home');
    }
}