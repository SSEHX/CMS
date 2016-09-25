<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 2016/9/23
 * Time: 下午3:00
 * ajax请求获取用户列表
 *
 */

if (!empty($_POST)){
    $query = "select head,user,sex,status,email from users limit 0,1";
}