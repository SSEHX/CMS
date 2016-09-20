<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/6
 * Time: 上午8:38
 */
include_once '../class/main.class.php';

$login = new login();
if ($_SESSION['i']==1){
    alter_goto::alertGoto("/cms/index.php",'您已登录!');
    exit;
}
//var_dump($_SESSION);
//echo "<hr>";
//var_dump($_COOKIE);
$login->check_login();

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<div class="main">
    <div class="input_div">
        <div class="left_div">
            <div class="h1">来啊!<br>创造未来啊!</div>
            <p>just do it&nbsp;!~</p>
            <a href="register.php"><div class="button">注册</div></a>
            <div class="info">
                请输入用户名和密码
            </div>
        </div>
    <form action="/cms/user/login.php" method="post">
        <input type="text" name="user" placeholder="用户名">
        <input type="password" name="password" placeholder="密&nbsp;码">
        <input type="submit" value="登&nbsp;录">
    </form>
    </div>
</div>
</body>
</html>
