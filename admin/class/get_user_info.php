<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 2016/9/28
 * Time: 上午10:32
 * 处理AJAX请求,并返回用户信息
 */

include_once '../../class/main.class.php';
include_once 'check_admin_level.class.php';

$level = new check_level();
$level->level();

$db = db::GET_OBJ();
if (!empty($_POST)) {
    $query = "select id,head,user,sex,status,email from users limit WHERE id={$_POST['id']}";
    $request = $db->query($query);
    $row = mysqli_fetch_assoc($request);
    echo '<pre>';
    var_dump($row);
    echo '</pre>';
}