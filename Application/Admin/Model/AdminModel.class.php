<?php
/**
 * 管理员model
 */
//引入model
require_once './Framework/Model.class.php';
class AdminModel extends Model{
    public function getadmin(){
        $sql = "select * from admin";
        $data = $this->link->queryAll($sql);
        return $data;
    }
   
}