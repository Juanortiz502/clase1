<?php

namespace App\Controllers;
use Src\Controller;
use App\Models\User;

//BORRAR
use Src\Model;

class indexController extends Controller{
   
    public function index(){
        $this->view->args = $this->args;
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
    public function login(){
        /**
         * e01 = Usuario o Clave Erronea
         * e02 = SIn autorizacion
         * s01 = Cerro Sesion
         */
        if(isset($_POST['email']) && isset($_POST['password'])){
            $user = $_POST['email'];
            $password = $_POST['password'];
            if($user == '' || $password == ''){
                header('location: /');
            }
            $email = User::where('email', $user)->first();
            if(password_verify($password, $email->password)){
                session_start();
                $_SESSION['name'] = $email->name;
                $_SESSION['lastName'] = $email->last_name;
                $_SESSION['email'] = $email->email;
                header('location: /index/dashboard');

            }else{
                header('location: /index/index/e01');
            }
           
            
        }else{
            header('location: /index/index/e01');
        }
    }
    public function dashboard(){
        $this->view->render('dashboard', 'admin');
    }
    public function closeSessions(){
        session_start();
        session_destroy();
        header('location: /index/index/s01');
    }
}