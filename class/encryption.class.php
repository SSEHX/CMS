<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/1
 * Time: 上午7:20
 * ************************加密、验证函数******************
 */

class encryption {

    /*
     * 加密密码
     */
    static public function enc_password($password)
    {
        return md5(substr($password,0,3).substr($password,-2));
    }

}
