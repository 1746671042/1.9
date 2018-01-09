

<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>注册</title>
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
                    <li><a href="">热点新闻</a></li>
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
        <div class="container" style="margin-top: 200px;">
            <form>
                <div class="form-group">
                    <label>账号:</label>
                    <input type="input" class="form-control" placeholder="账号" id="account">
                </div>
                <div class="form-group">
                    <label>密码:</label>
                    <input type="password" class="form-control" placeholder="password" id="pwd">
                </div>
                <div class="form-group">
                    <label>昵称:</label>
                    <input type="nickname" class="form-control" placeholder="昵称" id="nickname">
                </div>
                <button type="button" class="btn btn-default" id="button">注册</button>
            </form>
        </div>
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <script src="./public/boostrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
<script>
    {literal}
        $("#button").click(function () {
        var name = $("#account").val();
        var pwd =$("#pwd").val();
        var nickname =$("#nickname").val();
        if (name === "" || pwd==="" ||nickname=="") {
            alert("输入数据不能为空");
        } else {
            $.ajax({
                type: "post",
                url: "index.php?m=Home&a=regesiters&c=Index",
                data: {name:name,pwd:pwd,nickname:nickname},
                success: function (data) {
                    var data = $.parseJSON(data);
                    if (data.code ===200 ) {
                        history.go(-1);
                    } else {
                        alert(data.message);
                    }
                }
            });
        }
    });
    {/literal}
</script>
