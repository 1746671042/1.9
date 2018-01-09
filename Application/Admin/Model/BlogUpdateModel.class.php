<?php
require_once './Framework/Model.class.php';
class BlogUpdateModel extends Model{
    public function update($id,$status){
        if($status==1){
            $sql = "update blog set status=2 where id={$id}";
        }else{
            $sql = "update blog set status=1 where id={$id}";
        }
        
        $data = $this->link->update($sql);
       
        return $data;
    }
   
}