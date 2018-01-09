<?php
require_once './Framework/Model.class.php';
class RegisterModel extends Model{
    public function Register($name,$pwd,$nickname){
        $sql = "select * from user where account = {$name}";
        $congfu = $this->link->query($sql);
        if($congfu!=null){
            return "";  
        }else{
            $sql = "insert into user (account,pwd,nickname) values('{$name}','{$pwd}','{$nickname}');";
            $result = $this->link->add($sql);
            return $result;
        }
    }

}
  
