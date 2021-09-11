<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 11.09.2021
 * Time: 13:55
 */
namespace application\controllers;

use application\core\Controller;

class TestController extends Controller {

    public function actionTest(){
//        $this->view->layout = '';
//        $this->view->path = 'new/new';

        $vars = [
            'name' => 'weverv',
            'surname' => 'wrfgergewrgv',
        ];

        $this->view->render('test title', $vars);
    }

}