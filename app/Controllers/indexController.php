<?php

namespace App\Controllers;
use Src\Controller;
use App\Models\User;

//BORRAR
use Src\Model;

class indexController extends Controller{
   
    public function index(){
        $model = new Model();
        $users = User::count();
        echo $users;
        //Insertar Datos en la DB_DATABASE
        $newUser = new User();//crear la instancia
        $newUser->firstname = 'Migel';
        $newUser->lastname ='Arcacio';
        $newUser->email= 'macr@gmail.com';
        $newUser->password = 'werwerwerwer';
        //$newUser->save();
        //print_r($users);
        $this->view->render();
    }
    public function mensaje(){
       $this->view->render('home');
    }
    public function password(){
        echo $pass = "wramirez";//Solo tiene caracteres, longitud
        echo "<br>";
        echo "Base 64: " . base64_encode($pass);
        echo "<br>";
        
        echo "<br>";
        $options = [
            'cost' => 12,
        ];
        echo $halt = password_hash($pass, PASSWORD_BCRYPT, $options);
        echo "<br>";
        $passwordUser = "wramirez";
        if(password_verify($passwordUser, $halt)){
            echo "La contraseña es Correcta";
        }else{
            echo "La contraseña  Nooo es Correcta";
        }
    }
}