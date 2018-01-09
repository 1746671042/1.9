<?php
require_once './Framework/Model.class.php';

class NewsModel extends Model{
   
   
    public function newsList(){
        $sql = "select * from blog order by data desc limit 4;";
        $result = $this->link->queryAll($sql);
        return $result;
    }

}
  