<?php

require_once './Framework/Model.class.php';

class MyModel extends Model {

    public function Listinfos() {
        $account = $_COOKIE["account"];
        $pwd = $_COOKIE["pwd"];
        $sql = "select * from user where account={$account} and pwd={$pwd}";
        $user = $this->link->query($sql);
        $u_id = $user["id"];
        $sql = "select * from blog where u_id={$u_id}";
        $result = $this->link->queryAll($sql);
        return $result;
    }

}
