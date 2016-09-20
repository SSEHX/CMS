<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/9/20
 * Time: 12:18
 * 验证管理员等级
 */

class check_level {
    public function level(){
        include_once '../class/main.class.php';
        if ($_SESSION['i']){
            $query = "select is_admin from users where user='{$_COOKIE['ych_u']}'";
            $db = db::GET_OBJ();
            $request = $db->query($query);
            $row = mysqli_fetch_row($request);
            $_SESSION['level']=$row[0];
        }else{
            alter_goto::alertGoto('/admin/index.php');
        }
    }
}
