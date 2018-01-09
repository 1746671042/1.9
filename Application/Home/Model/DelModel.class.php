<?php
require_once './Framework/Model.class.php';

class DelModel extends Model {

    public function del($blogid) {
        
        if($blogid !=""){
            $sql = "delete from blog where id = {$blogid}";
            $result = $this->link->delete($sql);
            return $result;
        } 
    }

}

