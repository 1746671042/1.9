<?php
require_once './Framework/Model.class.php';
class UserDelModel extends Model{
    public function del($id){
        $sql = "delete from user where id={$id}";
        $data = $this->link->delete($sql);
        return $data;
    }
   
}