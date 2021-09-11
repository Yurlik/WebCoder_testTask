<?php

namespace application\core;



class Router {

    protected $routes = [];
    protected $params = [];

    public function __construct(){
        
        $routes = require_once 'application/config/routes.php';

        foreach ($routes as $route_k => $route_v) {
            $this->add($route_k, $route_v);
        }

    }

    public function add($route, $params){
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match(){
        $current_url = trim($_SERVER['REQUEST_URI'], '/');

        foreach($this->routes as $rout => $params){
            if(preg_match($rout, $current_url, $matches)){
                $this->params = $params;
                return true;
            }
        }
        return false;

    }

    public function run(){

        if($this->match()){
            $class_controller = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if(class_exists($class_controller)){
//                echo 'class exist'.'<br>';
                $controllers_action = 'action'.ucfirst($this->params['action']);
                if(method_exists($class_controller, $controllers_action)){
//                    echo 'method exist'.'<br>';
                    $controller = new $class_controller($this->params);
                    $controller->$controllers_action();
                }else{
                    View::errorCode(404);
                }
            }else{
                View::errorCode(404);
            }
        }else{
            View::errorCode(404);
        }
    }

}