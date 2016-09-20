<?php
/*
 * 注册类
 * 注册验证,写入注册信息
 */

include_once 'main.class.php';

class register{

    /*
     * 注册方法
     * 获取post信息,验证数据正确性,并返回注册信息
     * 成功:true 失败:false
     */
    static public function reg(){
//        实例化主类文件
        $db = db::GET_OBJ();

        /*
         * 判断是否进行了post提交
         */
        if (!empty($_POST)) {

            /*
             * 检测密码是否一致
             */

            if($_POST['password']!=$_POST['check_password']){
                alter_goto::alertGoto('/cms/user/register.php','两次密码不匹配!请重新注册');
            }

            /*
             * 检测用户名是否存在
             */
            $query = "select id from users where `user` = '{$_POST['user']}'";
            if ($request = $db->query($query)){
                if (mysqli_fetch_assoc($request)){
                    alter_goto::alertGoto('/cms/user/register.php','用户已注册!');
                }
            }

            /*
             * 加密密码
             * 处理数据
             */
            $password = encryption::enc_password($_POST['password']);
            $ip = get_ip::getIP();
            $time = time();

            /*
             * 写入数据库
             */
            $query = "insert into users(`user`,`password`,`email`,`create_ip`,`create_time`) 
                      VALUE ('{$_POST['user']}','{$password}','{$_POST['email']}','{$ip}','{$time}')";
            if ($db->query($query,'false')){
                if ($db->sql->affected_rows){
                    setcookie('ych_u',$_POST['user'],time()+3600,"/");
                    setcookie('ych_p',$password,time()+3600,"/");
                    $_SESSION['i'] = 1;
                    alter_goto::alertGoto('/cms/index.php','注册成功!');
                }else{
                    alter_goto::alertGoto('/cms/user/register.php');
                }
            }else{
                alter_goto::alertGoto('/cms/user/register.php');
            }
        }
    }

}