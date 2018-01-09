<?php
require_once './Framework/Model.class.php';

class IndexModel extends Model{
   
    public function gethotList(){
        $sql = "select * from blog order by click desc limit 4;";
        $result = $this->link->queryAll($sql);
        return $result;
    }
    public function getnewList(){
        $sql = "select * from blog order by data desc limit 4;";
        $result = $this->link->queryAll($sql);
        return $result;
         
    }

}
  