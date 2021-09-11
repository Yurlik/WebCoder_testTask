<?php

use application\core\Router;



spl_autoload_register(function($class){
// psr-4
    $path = str_replace('\\','/', $class);
    $path = $path.'.php';

    if(file_exists($path)){
        require_once($path);
    }
});

$router = new Router();
$router->run();
?>