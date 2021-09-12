<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 12.09.2021
 * Time: 16:18
 */

namespace application\controllers;

use application\core\Controller;

use application\lib\Db;

use application\models\Division;

class EmployeeController extends Controller
{
    public function actionShowall(){

        $result = $this->model->getAll();

        $vars = [
            'employ' => $result
        ];

        $this->view->render('All employers', $vars);
    }


    public function actionCreateEmployee($params){

        $result = $this->model->createEmployee($params);

        $divisions = Division::getAll();

        $vars = [
            'employ' => $result,
            'divisions' => $divisions,
        ];

        $this->view->render('All employers', $vars);
    }

    public function actionShow($params){

        $result = $this->model->getById($params);

        $vars = [
            'employ' => $result
        ];

        $this->view->render('Worker', $vars);
    }
}