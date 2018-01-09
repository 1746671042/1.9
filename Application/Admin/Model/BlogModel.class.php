<?php
require_once './Framework/Model.class.php';
class BlogModel extends Model{
    public function getblog(){
        $sql = "select * from blog";
        $data = $this->link->queryAll($sql);
        foreach ($data as $k=>$v){
            $u_id = $v["u_id"];
            $sql = "select * from user where id={$u_id}";
            $username = $this->link->query($sql);
            $u_name = $username["nickname"];
            $data[$k]["u_name"]=$u_name;
            
        }
        return $data;
    }
   
}