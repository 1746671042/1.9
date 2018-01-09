<?php
/* Smarty version 3.1.30, created on 2018-01-03 17:58:48
  from "D:\phpStudy\WWW\php\webs\Application\Home\View\newsInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ca95831a7d4_97832211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cb50c436764ea79da16a47b2d5f242a21de1672' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\webs\\Application\\Home\\View\\newsInfo.tpl',
      1 => 1514973525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4ca95831a7d4_97832211 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>热点新闻</title>
        <link href="./public/boostrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./public/boostrap/dist/css/style.css" />
    </head>
    <body>
        <!--导航-->
        <div id="nav">
            <!--<div class="navbar navbar-default">-->
            <div class="container">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php?m=Home&a=Index&c=Index">首页</a></li>
                    <li><a href="index.php?m=Home&a=hot&c=Index">热点新闻</a></li>
                    <li><a href="index.php?m=Home&a=news&c=Index">最新新闻</a></li>
                </ul>
                <div class="nav navbar-btn navbar-right">
                    <a href="index.php?m=Home&a=login&c=Index" type="button" class="btn btn-default">登录</a>
                    <a href="index.php?m=Home&a=regesiter&c=Index" type="button" class="btn btn-default">注册</a>
                </div>
            </div>
            <!--</div>-->
        </div>
        <!--最新新闻-->
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">热点新闻</div>
                <div class="panel-body">
                    <div class="list-group">
                          <span style="display:inline-block;width:200px;color: blue;">发表日期:&nbsp;<?php echo $_smarty_tpl->tpl_vars['newinfo']->value['data'];?>
&nbsp;&nbsp;&nbsp;</span>
                          <span style="color: red;">&nbsp;&nbsp;&nbsp;点击量:&nbsp;<?php echo $_smarty_tpl->tpl_vars['newinfo']->value['click'];?>
</span>
                          <p style="margin-top: 20px;"><?php echo $_smarty_tpl->tpl_vars['newinfo']->value['text'];?>
</p>
                          <span style="margin-left: 90%;">作者:&nbsp;<?php if ($_smarty_tpl->tpl_vars['newinfo']->value["user"]["nickname"] == null) {?>无名氏<?php } else {
echo $_smarty_tpl->tpl_vars['newinfo']->value["user"]["nickname"];
}?></span>
                    </div>
                </div>
            </div>
            <!--分页-->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                            <li>
                                <a href="">
                                    <span aria-hidden="true">1</span>
                                </a>
                            </li>
                            <li><a href="?page=<?php echo '<?php ';?>echo $pg; <?php echo '?>';?>&class=news" style=" color: red;">2</a></li>   
                            <li><a href="?page=<?php echo '<?php ';?>echo $pg; <?php echo '?>';?>&class=news">3</a></li>
                            <li>
                                
                            </li>
                       
                </ul>
            </nav>
        </div>


        <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="./public/boostrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
