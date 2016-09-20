<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/7
 * Time: 上午9:08
 * 发表文章页面
 */
include_once '../class/main.class.php';

$main = new start();

$document = new document();
$document->get_document();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>发表文章</title>
</head>
<body>
<h1>发表文章</h1>
<form action="document.php" method="post">
    <input type="text" name="title">
    <hr>
    <textarea name="document"></textarea>
    <input type="submit" value="发表">
</form>
</body>
</html>
