<?php
require_once './Framework/Model.class.php';
class UserUpdateModel extends Model{
    public function update($id,$name,$pwd,$nickname){
        $sql = "update user set account={$name},pwd={$pwd},nickname={$nickname} where id={$id}";
        $data = $this->link->update($sql);
        return $data;
    }
   
}