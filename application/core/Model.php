<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 11.09.2021
 * Time: 19:25
 */

namespace application\core;

use application\lib\Db;

abstract class Model{

    public $db;

    public function __construct(){
        $db = Db::getInstance();
    }

}