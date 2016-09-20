<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/5
 * Time: 下午9:39
 * 获取浏览用户ip地址
 */

class get_ip
{
    static public function getIP()
    {
        global $ip;

        if (getenv("HTTP_CLIENT_IP"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR"))
            $ip = getenv("REMOTE_ADDR");
        else $ip = "Unknow";

        return $ip;
    }
}