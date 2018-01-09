<?php
require_once './Framework/Model.class.php';

class QuitModel extends Model {
    public function quit(){
         setcookie("account", "",time()-1,"/");
         setcookie("pwd", "$pwd",time()-1,"/");
         echo "<script>self.location=document.referrer;</script>";
    }    
}