<?php
require_once './Framework/Model.class.php';
class DelModel extends Model{
    public function del($id){
        $sql = "delete from admin where id={$id}";
        $data = $this->link->delete($sql);
        return $data;
    }
   
}