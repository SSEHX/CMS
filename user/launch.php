<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/6
 * Time: 上午8:04
 * 注销
 */

//清除cookie
include_once '../class/main.class.php';

setcookie('ych_u','',time()-30000000,'/');
setcookie('ych_p','',time()-30000000,'/');
setcookie('id',time()-30000000,'/');
$_SESSION['i'] = 0;
$_SESSION['head'] = '';

header('location:/cms/index.php');