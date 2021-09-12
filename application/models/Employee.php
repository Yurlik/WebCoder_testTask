<?php
/**
 * Created by PhpStorm.
 * User: yuser
 * Date: 12.09.2021
 * Time: 16:05
 */

namespace application\models;

use application\core\Model;
use application\lib\Db;


class Employee extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $result = Db::qquery('SELECT employee.id, employee.name, employee.address, employee.email, employee.phone, employee.comment, division.name AS division_name FROM employee INNER JOIN division ON employee.div_id = division.id');

        return $result;
    }

    public function createEmployee(){

        if(!empty($_POST)) {
            $params[] = $_POST;
            $result = Db::qquery('INSERT INTO employee (name, email, address, phone, comment, div_id ) VALUES (:name, :email, :address, :phone, :comment, :div_id)', $params[0]);

        }
    }

    public function getById($vars){
        $result = Db::qquery('SELECT * FROM employee WHERE id='.$vars[0]);

        return $result;
    }

}