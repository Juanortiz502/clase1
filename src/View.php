<?php
namespace Src;
use App\Config;

class View{
    private $controller, $routeView, $roureLayout;
    public function __construct(){

    }
    public function render($view = 'index', $layout = 'default'){
        $this->routeView = Config::getPath() . '/../app/Views/' . $view;
        $this->roureLayout = Config::getPath() . '/../app/Layouts/' . $layout;
        require_once("$this->roureLayout/head.php");
        require_once("$this->routeView.php");
        require_once("$this->roureLayout/footer.php");
        
    }
}