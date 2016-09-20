<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/3
 * Time: 下午11:29
 */
include_once '../class/main.class.php';

register::reg();

?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="style/register.css">
</head>
<body>
<div class="main">
    <div class="input_div">
        <div class="left_div">
            <div class="h1">来啊!<br>创造未来啊!</div>
            <p>just do it&nbsp;!~</p>
            <a href="login.php"><div class="button">登录</div></a>
            <div class="info">
                请输入注册信息
            </div>
        </div>
    <form action="/cms/user/register.php" method="post" onsubmit="return ">
        <input type="text" name="name" placeholder="姓名" >
        <input type="text" name="user" placeholder="用户名">
        <input type="password" name="password" placeholder="密码">
        <input type="password" name="check_password" placeholder="确认密码">
        <input type="email" name="email" placeholder="email">
        <input type="submit" value="注&nbsp;册">
    </form>
    </div>
</div>
</body>
<script src="../style/js/jquery.js"></script>
<script src="js/register.js"></script>
</html>
