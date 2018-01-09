<?php
require_once './Framework/Model.class.php';

class HotModel extends Model{
   
    public function gethotList(){
        $sql = "select * from blog order by click desc limit 4;";
        $result = $this->link->queryAll($sql);
        return $result;
    }
   

}
  