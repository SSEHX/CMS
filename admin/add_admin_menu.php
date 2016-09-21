<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/21
 * Time: 上午10:42
 */
include_once 'class/main.class.php';

$add = new add();
$add->add_admin_menu();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加管理员功能</title>
</head>
<body>
    <form action="add_admin_menu.php" method="post">
        type:<input type="text" name="type">
        menu:<input type="text" name="menu">
        <input type="submit">
    </form>

</body>
</html>
