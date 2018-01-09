<?php
require_once './Framework/Model.class.php';
class CookieModel extends Model{
   public function getCookie(){
    if(!isset($_COOKIE["account"])){
        return "";
    }else{
        $account = $_COOKIE["account"];
        $pwd = $_COOKIE["pwd"];
        $sql = "select * from user where account={$account} and pwd={$pwd}";
        
        if($this->link->query($sql) ==null){
          return "";
        }else{
           return $this->link->query($sql);
        }
    }
  
    }
}
?>