<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 11.09.2021
 * Time: 17:10
 */

namespace application\core;

use application\core\View;

class Controller
{

    public $route;
    public $view;
    public $model;

    public function __construct($route) {
        $this->route = $route;
        $this->view = new View($route);
    }


}