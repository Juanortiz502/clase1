<?php
namespace Src;
use App\Config;

class Request{

    private $url, $controller, $method, $arg;//Declaramos variables privadas
    public $config;


    public  function __construct($url){
        $this->config = new Config();
        if($url != ""){
            $this->url = explode('/', $url);//http://localhost:81/index/suma => 0=index 1=suma
            $this->controller = array_shift($this->url) ;
            $this->method = array_shift($this->url);
            $this->arg = $this->url;
        }else{
            //Configuramos en la app los datos por defecto
            $this->controller = $this->config->getControllerDefault();
            $this->method = $this->config->getMethodDefault();
            $this->arg = array();
        }
    }
    public function getController():string{
        return $this->controller;
    }
    public function getMethod():string{
        return $this->method ?: $this->config->getMethodDefault() ;
    }
    public function getArg():array{
        return $this->arg ?: array();
    }
    
}
?>