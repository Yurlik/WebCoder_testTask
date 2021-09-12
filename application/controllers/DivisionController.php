<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 12.09.2021
 * Time: 11:23
 */

namespace application\controllers;

use application\core\Controller;

use application\lib\Db;

class DivisionController extends Controller
{

    public function actionShowall(){

        $result = $this->model->getAll();

        $vars = [
            'div' => $result
        ];

        $this->view->render('All divisions', $vars);
    }

    public function actionShow($params){

        $result = $this->model->getById($params);

        $vars = [
            'div' => $result
        ];

        $this->view->render('Division', $vars);
    }

}