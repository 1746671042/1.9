<?php
/* Smarty version 3.1.30, created on 2018-01-04 11:18:45
  from "D:\phpStudy\WWW\php\webs\Application\Home\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d9d153a9812_97606564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f0f08e10d345cc2aa4076db274fc3a261f5c851' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\webs\\Application\\Home\\View\\index.tpl',
      1 => 1515035873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4d9d153a9812_97606564 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>新闻首页</title>
        <link href="./public/boostrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./public/boostrap/dist/css/style.css" />
        
    </head>
    <body>
        <!--导航-->
        <div id="nav">
            <!--<div class="navbar navbar-default">-->
            <?php if ($_smarty_tpl->tpl_vars['cookie']->value == '') {?>
            <div class="container" >
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
            <?php } else { ?>
            <div class="container" >
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php?m=Home&a=Index&c=Index">首页</a></li>
                    <li><a href="index.php?m=Home&a=hot&c=Index">热点新闻</a></li>
                    <li><a href="index.php?m=Home&a=news&c=Index">最新新闻</a></li>
                </ul>
                <div class="nav navbar-btn navbar-right">
                    <a href="javascript:;" type="button" class="btn btn-default user"><?php echo $_smarty_tpl->tpl_vars['username']->value["nickname"];?>
</a>
                    <a href="index.php?m=Home&a=quit&c=Index" type="button" class="btn btn-default">QUIT</a>
                </div>
                <div class="show" style="display: none !important;position: absolute; left: 74%;top:50px;z-index: 999;float: left;height: 68px;width:83px;">
                    <a href="index.php?m=Home&a=upshow&c=Index" type="button" class="btn btn-default">发表博文</a>
                    <a href="index.php?m=Home&a=blogList&c=Index" type="button" class="btn btn-default">博文列表</a>
                </div>
            </div>
            <?php }?>
            <!--</div>-->
        </div>
        <!--最新新闻-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">最新新闻</div>
                        <div class="panel-body">
                            <div class="list-group">
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blognewlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                   <p style="margin: 20px;border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['v']->value['text'];?>
</p>
                               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div>热点新闻</div>
                        </div>
                        <div class="panel-body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bloghotlist']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
                                    <p style="margin: 20px;border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['s']->value['text'];?>
</p>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="./public/boostrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
       
    </body>
</html>
<?php echo '<script'; ?>
>
    $(".user").click(function(){
        $(".show").show();
        $(".show").attr("class", "hides");
    })
     
<?php echo '</script'; ?>
>
<?php }
}
