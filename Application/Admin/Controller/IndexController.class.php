<?php
//控制器控制mv
require_once './Framework/Controller.class.php';
class IndexController extends Controller{
    public function Index(){
      $this->smarty->display("Index.tpl");
    }
     public function Admin(){
      $admin = M("Admin")->getadmin();

      $this->smarty->assign("admin",$admin);
      $this->smarty->display("Admin.tpl");
    }
    public function Blog(){
      $blog = M("Blog")->getblog();
      $this->smarty->assign("blog",$blog);
      $this->smarty->display("Blog.tpl");
    }
    public function User(){ 
      $user = M("User")->getuser();
      $this->smarty->assign("listuser",$user);
      $this->smarty->display("User.tpl");
    }
    //管理员修改和删除
    public function update(){
        $id = $this->post("id",0);
        $pwd = $this->post("pwd",0);
        $name = $this->post("name",0);
        $update = M("Update")->update($id,$pwd,$name);
        if($update ==true){
            $this->smarty->assign("update",$update);
        }else{
            $this->smarty->assign("update","");
        }
        
    }
    public function delete(){ 
      $id = $this->post("id",0);
      $Del = M("del")->del($id);
      $this->smarty->assign("Del",$del);
      $this->smarty->display("Admin.tpl");
    }
    
    //用户修改和删除
    public function userUpdate(){
        $id = $this->post("id",0);
        $pwd = $this->post("pwd","");
        $name = $this->post("name","");
        $nickname=$this->post("nickname","");
        $update = M("UserUpdate")->update($id,$pwd,$name,$nickname);
       
        if($update ==true){
            $this->smarty->assign("update",$update);
        }else{
            $this->smarty->assign("update","");
        }
        
    }
    public function userDelete(){ 
      $id = $this->post("id",0);
      $Del = M("del")->del($id);
      $this->smarty->assign("Del",$del);
      $this->smarty->display("User.tpl");
    }
    
    
    //博文修改
    public function BlogUpdate(){
        $id = $this->post("id",0);
        $status = $this->post("status","");
        $update = M("BlogUpdate")->update($id,$status);
       
        if($update ==true){
            $this->smarty->assign("update",$update);
        }else{
            $this->smarty->assign("update","");
        }
        
    }
  
     
}
