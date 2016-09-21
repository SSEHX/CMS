<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/21
 * Time: 上午10:30
 * 添加管理员功能页面
 */


class add {

    public function add_admin_menu (){
        if (!empty($_POST)) {
            $query = "insert into admin_menu (type,menu) VALUE ('{$_POST['type']}','{$_POST['menu']}')";
            $db = db::GET_OBJ();
            if ($db->query($query,false)){
                alter_goto::alertGoto(dirname(__FILE__)."/add_admin_menu",'插入完成');
            }else{
                alter_goto::alertGoto(__FILE__,'插入失败');
            }
        }
    }

    public function add_user_menu (){
        if (!empty($_POST)){

        }
    }
}
