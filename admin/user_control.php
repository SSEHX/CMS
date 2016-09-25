<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/9/20
 * Time: 11:59
 *
 * 用户管理界面
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="style/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../public/public.css">
    <link rel="stylesheet" type="text/css" href="style/css/admin.css">
    <link rel="stylesheet" type="text/css" href="style/css/user_control.css">
</head>
<body>


<?php
include_once 'admin.php';
?>
<div class="user_div">

    <div class="ui pointing menu">
        <a class="item">浏览用户 </a>
        <a class="item">浏览管理员 </a>
        <div class="right menu">
            <div class="item">
                <div class="ui transparent icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="ui segment">
        <div class="user_info">

        <button class="ui secondary check button ">全选</button>
        <button class="ui secondary un_check button">全不选</button>
        <button class="ui secondary toggle button">反选</button>

        <table class="ui  celled table">
            <thead>
            <tr><th class="user_checkbox_th">选择</th>
                <th>用户名</th>
                <th>用户ID</th>
                <th>状态</th>
                <th>邮箱</th>
                <th class="user_change_th">选项</th>
            </tr></thead>
            <tbody>
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
                        <div class="content">Lena</div>
                    </h4></td>
                <td>
                    22
                </td>
                <td>
                    状态
                </td>
                <td>
                    邮箱
                </td>
                <td>
                    <button class="ui blue button">详情</button>
                    <button class="ui green button">操作</button>
                </td>
            </tr>


            </tbody>
        </table>
        </div>
    </div>
</div>

</div>

</body>
<script src="style/js/jquery.js"></script>
<script src="style/js/semantic.min.js"></script>
<script src="style/js/admin.js"></script>
<script src="../public/public.js"></script>
<script src="style/js/user_control.js"></script>
</html>