<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/8/31
 * Time: 下午12:04
 * **************************数据库类测试文件************************
 */
session_start();

include_once '../db.class.php';

$db = db::GET_OBJ();
for ($i = 1;$i<10000;$i++) {
    $query = "insert into users (user) value ('{$i}')";
    var_dump($db->query($query));
    echo $i."<hr>";
}