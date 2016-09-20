<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/7
 * Time: 上午9:05
 * 发表文章
 */
include_once 'main.class.php';


class document{
     public function get_document(){
//         当提交了内容,并且内容不能为空时执行
        if (!empty($_POST['title'])&&!empty($_POST['document'])&&$_POST['title']!=''&&$_POST['document']!=''){
//            echo "<pre>";
//            var_dump($_POST);
//            var_dump($_SESSION);
//            var_dump($_COOKIE);
//            echo "</pre>";
            $time = time();
            $query = "insert into document(user_id,title,document,create_time) 
                      VALUE ({$_COOKIE['id']},'{$_POST['title']}','{$_POST['document']}',{$time})";
            $db = db::GET_OBJ();
            if($db->query($query,false)){
                if ($id = $db->sql->affected_rows){
                    var_dump($id);
                }
            }else{
//                提交失败
                echo '提交失败';
                var_dump($query);
            }
        }
    }
}