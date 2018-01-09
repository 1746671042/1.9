<?php

//接受传参
$module = isset($_GET["m"])?$_GET["m"]:"Home"; //分组
$controller = isset($_GET["c"])?$_GET["c"]:"Index";//控制器
$action = isset($_GET["a"])?$_GET["a"]:"Index";//方法

define("DOCUMENT_ROOT", dirname(__FILE__)); //网站目录


define("CONTROLLER", $controller);
define("ACTION",$action);
define("MOUDULE",$module);

define("TEMPLATE",DOCUMENT_ROOT."/Application/{$module}/View");//模板目录
define("TEMPLATE_C",DOCUMENT_ROOT."/public/View_c");//编译目录
//引入配置文件
require_once './Common/function.php';

//引入文件
require_once "./Application/{$module}/Controller/{$controller}Controller.class.php";


//实例化
$name = $controller."Controller";
$object = new $name;

//调取方法
$object->$action();