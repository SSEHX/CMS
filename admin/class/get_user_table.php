<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 2016/9/23
 * Time: 下午3:00
 * ajax请求获取用户列表
 *
 */
include_once '../../class/main.class.php';
include_once 'check_admin_level.class.php';

$level = new check_level();
$level->level();

$db = db::GET_OBJ();
if (!empty($_POST)){
    $query = "select id,head,user,sex,status,email from users limit {$_POST['start']},{$_POST['end']}";
    $request = $db->query($query);

    while ($row = mysqli_fetch_assoc($request)){
        if ($row['status']==0){
            $row['status']='停用';
            $row['status_style']='#FF4332';
        }else{
            $row['status']='正常';
            $row['status_style']='#00ff43';
        }
        $html = <<<h
                <tr>
                    <td>
                        <div class="ui user fitted checkbox checkbox_td">
                            <input type="checkbox">
                            <label></label>
                        </div>
                    </td>
                    <td>
                        <h4 class="ui image header">
                            <img src="image/patrick.png" class="ui mini rounded image">
                            <div class="content">{$row['user']}</div>
                        </h4></td>
                    <td>
                        {$row['id']}
                    </td>
                    <td>
                        {$row['status']}
                    </td>
                    <td>
                        {$row['email']}
                    </td>
                    <td>
                        <button class="ui blue button get_user_info_but" user_id = '{$row['id']}'>详情</button>
                        <button class="ui green button">操作</button>
                    </td>
                </tr>
h;
        echo $html;
    }

}




