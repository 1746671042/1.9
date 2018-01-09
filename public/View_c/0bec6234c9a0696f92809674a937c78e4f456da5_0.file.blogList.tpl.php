<?php
/* Smarty version 3.1.30, created on 2018-01-04 14:53:24
  from "D:\phpStudy\WWW\php\webs\Application\Home\View\blogList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dcf64cf9e78_43408086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bec6234c9a0696f92809674a937c78e4f456da5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\webs\\Application\\Home\\View\\blogList.tpl',
      1 => 1515048801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4dcf64cf9e78_43408086 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>博文列表</title>
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
                </div>
                <div class="show" style="display: none !important;position: absolute; left: 77%;top:50px;z-index: 999;float: left;height: 68px;width:83px;">
                    <a href="index.php?m=Home&a=upshow&c=Index" type="button" class="btn btn-default">发表博文</a>
                    
                </div>
            </div>
            <?php }?>
            <!--</div>-->
        </div>
        <!--最新新闻-->
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">热点新闻</div>
                <div class="panel-body">
                    <div class="list-group">
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MyblogList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                           <p><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['v']->value['text'];?>
</a> </p>
                           <p data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="delete">删除</p>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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

<?php echo '<script'; ?>
>
    $(".user").click(function(){
        $(".show").show();
    })
    $(".delete").click(function(){
        var blogid = $(this).attr("data-id");
        $.ajax({
         url:"index.php?m=Home&a=delete&c=Index",
         type:"post",
         data:{id:blogid},
         success:function(data){
             history.go(0);
         }
        })
    })
<?php echo '</script'; ?>
>
<?php }
}
