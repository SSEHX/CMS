<?php
/**
 * Created by PhpStorm.
 * User: 许笑旗
 * Date: 16/9/5
 * Time: 下午9:17
 * 类的集合
 */

define("__ROOT__",dirname(__FILE__));
session_start();

include_once 'db.class.php';
include_once 'encryption.class.php';
include_once 'register.class.php';
include_once 'login.class.php';
include_once 'goto.class.php';
include_once 'get_ip.class.php';
include_once 'document.class.php';

class start{
    public function __construct($type = true)
    {
        $is_login = new login();
        if ($type){
            $is_login->is_login($type);
        }else{
            $is_login->is_login($type);
        }
    }
}