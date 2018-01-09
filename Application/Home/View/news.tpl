
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>最新新闻</title>
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
                <div class="panel-heading">最新新闻</div>
                <div class="panel-body">
                    <div class="list-group">
                        {foreach from=$newsList item=v}
                        <p>{$v.text}</p>
                        {/foreach}
                    </div>
                </div>
            </div>
            <!--分页-->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                   {*   <?php
                    if ($newestList["status"] = true) {
//                        var_dump($newestList["allPage"]);
                        if ($newestList["page"] > 1) {
                            ?>
                            <li>
                                <a href="?page=<?php echo ($newestList["page"] - 1); ?>&class=news" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php
                        }
                        if ($newestList["allPage"] < $showPages) {
                            $newestList["start"] = 1;
                            $end = $newestList["allPage"];
                        } else {
                            $newestList["start"] = $newestList["page"] - 1;
                            $end = $newestList["page"] + 1;
                            if ($newestList["start"] <= 1) {
                                $newestList["start"] = 1;
                                $end = $showPages;
//                                echo  $newestList["start"];
                            }
                            if ($end > $newestList["allPage"]) {
                                $end = $newestList["allPage"];
                                $newestList["start"] = $newestList["allPage"] - 2;
                            }
                        }
                        for ($pg = $newestList["start"]; $pg <= $end; $pg++) {
                            ?>
                            <?php if ($pg == $newestList["page"]) { ?>
                            <li><a href="?page=<?php echo $pg; ?>&class=news" style=" color: red;"><?php echo $pg; ?></a></li>
                                <?php } else { ?>
                            <li><a href="?page=<?php echo $pg; ?>&class=news"><?php echo $pg; ?></a></li>
                            <?php } ?>
                        <?php } ?>
                        <?php if ($newestList["page"] < $newestList["allPage"]) { ?>
                            <li>
                                <a href="?page=<?php echo($newestList["page"] + 1)?>&class=news" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php
                    }
                    ?>*}
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