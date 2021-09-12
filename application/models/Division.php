<?php
namespace application\models;

use application\core\Model;
use application\lib\Db;

class Division extends Model
{

    public function __construct(){
        parent::__construct();
    }


    public function getAll(){
        $result = Db::qquery('SELECT * FROM division');
        return $result;
    }

    public function getById($vars){
        $result = Db::qquery('SELECT * FROM division WHERE id='.$vars[0]);

        return $result;
    }

    public function createDivision(){

    }

    public function updateDivision(){

    }

    public function deleteDivision(){

    }



}