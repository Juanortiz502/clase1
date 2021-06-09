<?php
namespace Src;

use App\Config;
class Run{
    public static function Execute(Request $res){
        
        $routeController =  Config::getPath() . DIRECTORY_SEPARATOR . "../app/Controllers/". $res->getController() . 'Controller';
        if(is_readable("$routeController.php")){//Validar que Exista
            try {
                $loadController = 'App\\Controllers\\' . $res->getController() . 'Controller';
                $controller = new $loadController;
                $loadMethod = $res->getMethod();
                $controller->$loadMethod();
               
            } catch (\Throwable $th) {
                echo "Error de Carga";
            }
        }else{
            echo "No se LEEE";
        }
    }
}