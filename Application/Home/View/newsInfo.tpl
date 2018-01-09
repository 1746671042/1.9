
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
                          <span style="display:inline-block;width:200px;color: blue;">发表日期:&nbsp;{$newinfo.data}&nbsp;&nbsp;&nbsp;</span>
                          <span style="color: red;">&nbsp;&nbsp;&nbsp;点击量:&nbsp;{$newinfo.click}</span>
                          <p style="margin-top: 20px;">{$newinfo.text}</p>
                          <span style="margin-left: 90%;">作者:&nbsp;{if $newinfo["user"]["nickname"] ==null}无名氏{else}{$newinfo["user"]["nickname"]}{/if}</span>
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
