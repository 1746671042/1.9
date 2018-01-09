<?php
//控制器控制mv
require_once './Framework/Controller.class.php';
class IndexController extends Controller {
    //cookie
    public function cookis(){
        $cookie = M("Cookie")->getCookie();
        if($cookie !=""){
            $this->smarty->assign("cookie",$cookie);
        }else{
            $this->smarty->assign("cookie","");
        }
        $username = M("Cookie")->getCookie();
        $this->smarty->assign("username",$username);
    }
    //首页
    public function index(){
        //判断cookie
        $this->cookis();
        
        $blognewlist = M("Index")->getnewList();
        $bloghotlist = M("Index")->gethotList();
        
        $this->smarty->assign("blognewlist",$blognewlist);
        $this->smarty->assign("bloghotlist",$bloghotlist);
        $this->smarty->display("index.tpl");
    }
    //登录
    public function login(){
        $this->smarty->display("login.tpl");
    }
     public function logins(){
        $name = $this->post("name","");
        $pwd = $this->post("pwd","");
        $login = M("Login")->Login($name,$pwd);
        if($login){
            $this->show(200,"登录成功",$login);
        }else{
            $this->show(100,"登录失败","");
        }
        $this->smarty->assign("login",$login);
    }
    //注册
     public function regesiter(){
        $this->smarty->display("regesiter.tpl");
    }
    public function regesiters(){
        $name = $this->post("name","");
        $pwd = $this->post("pwd","");
        $nickname = $this->post("nickname","");
        $login = M("Register")->Register($name,$pwd,$nickname);
        if($login){
            $this->show(200,"注册成功",$login);
        }else{
            $this->show(100,"注册失败/账号已存在","");
        }
        $this->smarty->assign("login",$login);
    }
    //热门
    public function hot(){
        $this->cookis();
        $hotList = M("Hot")->gethotList();
        $this->smarty->assign("hotList",$hotList);
        $this->smarty->display("hot.tpl");
    }
    //最新
    public function news(){
        $this->cookis();
        $newsList = M("News")->newsList();
        $this->smarty->assign("newsList",$newsList);
        $this->smarty->display("news.tpl");
    }
    
    //详情
    public function newsInfo(){
        $this->cookis();
        $id = $this->get("id",0);
        $newinfo = M("Info")->InfoList($id);
     
        $this->smarty->assign("newinfo",$newinfo);
        $this->smarty->display("newsInfo.tpl");
    }
    
   //博文列表
    public function blogList(){
        $this->cookis();
        $myblog = M("My")->Listinfos();
        $this->smarty->assign("MyblogList",$myblog);
        $this->smarty->display("blogList.tpl");
    }
       
      //删除博文
    public function delete(){
        $blogid = $this->post("id",0);
        $del = M("Del")->del($blogid);
        $this->smarty->assign("del",$del);
        $this->smarty->display("blogList.tpl");
    }
           
   public function quit(){
       $quit = M("Quit")->quit();
   }
   //发表博文
    public function upshow(){
       $upshows = M("Show")->show();
       $this->smarty->display("upshow.tpl");
    }
}
