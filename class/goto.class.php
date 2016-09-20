<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/5
 * Time: 下午9:12
 * 弹出提示框,并跳转到指定网页
 */

class alter_goto{
    static function alertGoto($path,$info="出现问题!")
    {
        echo "<script>alert('{$info}');window.location.href = '{$path}';</script>";
        exit;
    }
}