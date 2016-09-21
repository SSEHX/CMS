<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/9/18
 * Time: 18:30
 */



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文档模块</title>
    <link rel="stylesheet" type="text/css" href="style/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/document.css">
</head>
<body>

<div class="ui sidebar inverted vertical menu">

    <h4 class="ui horizontal inverted divider">MENU</h4>
    <a class="item">PHP</a>
    <a class="item">HTML</a>
    <a class="item">CSS</a>
    <a class="item">jquery</a>
    <a class="item">bootstrap</a>
    <a class="item">semantic</a>
    <a class="item">MySql</a>
    <a class="item">Linux</a>
    <a class="item">LAMP</a>
    <a class="item">javascript</a>
</div>
<div class="pusher">
    <!-- Site content !-->
    <div class="ui top attached demo menu" >
<!--        菜单按键-->
        <a class="item" id="sidebar_but"><i class="sidebar icon"></i> 菜单(Menu) </a>
<!--        搜索框-->
            <div class="header_search">
                <div class="ui left icon action input">
                    <i class="search icon"></i>
                    <input type="text" placeholder="Order #">
                    <div class="ui blue submit button">搜索</div>
                </div>
            </div>
            <?php
                $user = <<<user
    <!--        用户信息-->
            <div class="user_head_div">
                <div class="ui horizontal list">
                    <div class="item">
                        <img src="image/default.png" class="ui mini circular image">
                        <div class="content">
                            <div class="ui sub header">Eve</div>Project Manager </div>
                    </div>
                </div>
            </div>
user;
            $login = <<<login
            <div class="login_div">
                <button class="ui inverted violet button">登陆</button>
                
                <button class="ui inverted blue button">注册</button>
            </div>
login;
            echo $login;
            ?>


    </div>

</div>
</body>
<script src="style/js/jquery.js"></script>
<script src="style/semantic.min.js"></script>
<script src="style/js/document.js"></script>
</html>
