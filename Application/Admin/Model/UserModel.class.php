<?php
require_once './Framework/Model.class.php';
class UserModel extends Model{
    public function getuser(){
        $sql = "select * from user";
        $data = $this->link->queryAll($sql);
        return $data;
    }
   
}