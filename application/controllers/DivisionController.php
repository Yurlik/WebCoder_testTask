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

    public function actionCreateDivision($params){

        $result = $this->model->createDivision($params);
        $result = $this->model->getById($params);

        $vars = [
            'div' => $result
        ];

        $this->view->render('Create Division', $vars);
    }

    public function actionUpdateDivision($params){

        $result = $this->model->updateDivision($params);
        $result = $this->model->getById($params);

        $this->view->path = 'division/show';

        $vars = [
            'div' => $result
        ];

        $this->view->render('Update Division', $vars);
    }

    public function actionDeleteDivision($params){

        $result = $this->model->deleteDivision($params);
        //$result = $this->model->getById($params);
        $result = $this->model->getAll();
        $this->view->path = 'division/showall';

        $vars = [
            'div' => $result
        ];

        $this->view->render('Create Division', $vars);
    }


}