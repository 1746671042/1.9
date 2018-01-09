<?php
require_once './Framework/Model.class.php';
class UpdateModel extends Model{
    public function update($id,$name,$pwd){
        $sql = "update admin set name={$name},pwd={$pwd} where id={$id}";
        $data = $this->link->update($sql);
        return $data;
    }
   
}