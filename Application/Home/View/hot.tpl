
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
            {if $cookie ==""}
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
            {else}
            <div class="container" >
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php?m=Home&a=Index&c=Index">首页</a></li>
                    <li><a href="index.php?m=Home&a=hot&c=Index">热点新闻</a></li>
                    <li><a href="index.php?m=Home&a=news&c=Index">最新新闻</a></li>
                </ul>
                <div class="nav navbar-btn navbar-right">
                    <a href="javascript:;" type="button" class="btn btn-default user">{$username["nickname"]}</a>
                </div>
                <div class="show" style="display: none !important;position: absolute; left: 77%;top:50px;z-index: 999;float: left;height: 68px;width:83px;">
                    <a href="index.php?m=Home&a=upshow&c=Index" type="button" class="btn btn-default">发表博文</a>
                    <a href="index.php?m=Home&a=blogList&c=Index" type="button" class="btn btn-default">博文列表</a>
                </div>
            </div>
            {/if}
            <!--</div>-->
        </div>
        <!--最新新闻-->
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">热点新闻</div>
                <div class="panel-body">
                    <div class="list-group">
                       {foreach from=$hotList item=v}
                           <p><a href="index.php?m=Home&c=Index&a=newsInfo&id={$v.id}">{$v.text}</a> </p>
                       {/foreach}
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
                            <li><a href="?page=<?php echo $pg; ?>&class=news" style=" color: red;">2</a></li>   
                            <li><a href="?page=<?php echo $pg; ?>&class=news">3</a></li>
                            <li>
                                
                            </li>
                       
                </ul>
            </nav>
        </div>


        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <script src="./public/boostrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
<script>
    $(".user").click(function(){
        $(".show").show();
    })
</script>