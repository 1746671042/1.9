<?php
require_once './Framework/Model.class.php';
class LoginModel extends Model{
    public function Login($name,$pwd){
        $sql = "select * from user where account = {$name}"; 
        $congfu = $this->link->query($sql);

        if($congfu!=null){
            $sql = "select * from user where account ={$name} and status =1";
            $denglu = $this->link->query($sql);
            if($denglu!=null){
                setcookie("account", $name,time()+60*60*24,"/");
                setcookie("pwd", $pwd,time()+60*60*24,"/");
                return $denglu;
            }
           
        }else{
            return "";
        }
    }

}
  