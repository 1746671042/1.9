<?php
require_once './Framework/Model.class.php';

class InfoModel extends Model{
    public function InfoList($id){
        $sql = "select * from blog where id = $id";
        $result = $this->link->query($sql);
        $u_id = $result["u_id"];
        
        $sql = "select * from user where id={$u_id};";
        $user = $this->link->query($sql);
        $result["user"]=$user;
        
        return $result;
    }

}
  