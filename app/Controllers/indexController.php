<?php

namespace App\Controllers;
use Src\Controller;
use App\Models\User;
use App\Models\Task;

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
        $ps = base64_encode($pass);
        echo "Base 64: " . $ps;
        echo "<br>";
        echo "La clave des codificada es: " . base64_decode($ps);
        echo "<br>";
        $options = [
            'cost' => 10,
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
            $email = User::where('email', $user)->first();//ORM => SELECT * FROM users WHERE email = $user LIMIT 1
            if(password_verify($password, $email->password)){
                session_start();//Habilitar las sesiones
                $_SESSION['name'] = $email->name;
                $_SESSION['lastName'] = $email->last_name;
                $_SESSION['email'] = $email->email;
                header('location: /index/dashboard');//Redireccionar

            }else{
                header('location: /index/index/e01');//Redirrecionar al login
            }
           
            
        }else{
            header('location: /index/index/e01');
        }
    }
    public function dashboard(){
        $this->view->pendingTasks = Task::where('status', 'Pendiente')->get();
        $this->view->doneTasks = Task::where('status', 'Finalizado')->get();
        //$this->view->render(vista, layout); 
        $this->view->render('dashboard', 'admin');
    }
    public function closeSessions(){
        session_start();
        session_destroy();
        header('location: /index/index/s01');
    }
    public function addTask(){
        $task = new Task();
        $task->task = $_POST['task'];
        $task->save();
        header('location: /index/dashboard');
    }
}