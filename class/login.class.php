<?php
/*
 * 登录函数
 */
include_once 'main.class.php';

class login{

    /*
     * 判断是否登录
     * 默认不允许不登录访问
     * $type = true 时不允许未登录访问,
     * $type = false 时允许未登录访问
     */
    public function is_login($type=true){
        if (!empty($_SESSION['i'])) {
            if (!empty($_COOKIE['ych_u']) && !empty($_COOKIE['ych_p'])) {
                $query = "select * from users where user = '{$_COOKIE['ych_u']}'&&password = '{$_COOKIE['ych_p']}'";
                $db = db::GET_OBJ();
                $request = $db->query($query);
                $row = mysqli_fetch_assoc($request);
                if ($row['id'] == $_COOKIE['id']) {
                    $_SESSION['i'] = 1;
                } else {
                    $_SESSION['i'] = 0;
                    if ($type) {
                        alter_goto::alertGoto('/cms/user/login.php', '请先登录!');
                    }
                }
            } else {
                $_SESSION['i'] = 0;
                if ($type) {
                    alter_goto::alertGoto('/cms/user/login.php', '请先登录!');
                }
            }
        }else{
            $_SESSION['i']=0;
        }
    }

    /*
     * 登录验证
     */
    public function check_login(){
//        当提交数据时
        if (!empty($_POST)) {
//            判断输入是否为空
            if ($_POST['user']!=''&&$_POST['password']!='') {
//                将密码加密然后在数据库内查找是否有此用户
                $password = encryption::enc_password($_POST['password']);
                $query = "select * from users where user = '{$_POST['user']}' && password = '{$password}'";
                $db = db::GET_OBJ();
                $request = $db->query($query);
                $row = mysqli_fetch_assoc($request);
                if ($row['id']){
                    $_SESSION['i'] = 1;
                    $_SESSION['head'] = $row['head'];
                    setcookie('ych_u',$_POST['user'],time()+3600,"/");
                    setcookie('ych_p',$password,time()+3600,"/");
                    setcookie('id',$row['id'],time()+3600,"/");
                    alter_goto::alertGoto('/cms/index.php','登录成功!');
                }else{
                    $_SESSION['i'] = 0;
                    alter_goto::alertGoto('/cms/user/login.php','登录失败!请检查用户名或密码是否正确!');
                }
            }else{
                alter_goto::alertGoto('/cms/user/login.php','用户名和密码不能为空!');
            }
        }
    }
}

