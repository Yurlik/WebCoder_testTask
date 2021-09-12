<?php
namespace application\models;

use application\core\Model;
use application\lib\Db;

class Division extends Model
{

    public function __construct(){
        parent::__construct();
    }


    public static function getAll(){
        $result = Db::qquery('SELECT * FROM division');
        return $result;
    }

    public function getById($vars){
        $result = Db::qquery('SELECT * FROM division WHERE id='.$vars[0]);

        return $result;
    }

    public function createDivision(){

        if(!empty($_POST)) {
            $params['name'] = $_POST['name'];
            $result = Db::qquery('INSERT INTO division (name) VALUES (:name)', $params);

        }
    }

    public function updateDivision($vars){
        if(!empty($_POST)) {
            $params['name'] = $_POST['name'];
            $result = Db::qquery('UPDATE division SET name=:name WHERE id='.$vars[0], $params);

        }
    }

    public function deleteDivision($vars){
        $query = Db::qquery('DELETE FROM division WHERE id='.$vars[0]);
    }



}