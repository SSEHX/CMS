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
<html><head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="style/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../public/public.css">
    <link rel="stylesheet" type="text/css" href="style/css/admin.css">
    <link rel="stylesheet" type="text/css" href="style/css/user_control.css">
</head>
<body>




<div class="ui sidebar inverted vertical menu">

    <h4 class="ui horizontal inverted divider">MENU</h4>
    <a class="item" type="user_control.php" href="/cms/admin/user_control.php">用户管理</a><a class="item" type="admin_control.php" href="/cms/admin/admin_control.php">管理员管理</a></div>
<div class="pusher">
    <div class="ui top attached demo menu">
        <!--        菜单按键-->
        <a class="item" id="sidebar_but"><i class="sidebar icon"></i> 菜单(Menu) </a>
        <!--        搜索框-->
        <div class="header_search">
            <div class="ui left icon action input">
                <i class="search icon"></i>
                <input placeholder="Search" type="text">
                <div class="ui blue submit button">搜索</div>
            </div>
        </div>

        <!--        用户信息-->
        <div class="user_head_div">
            <div class="ui horizontal list" id="user_head">
                <div class="item">
                    <img src="/cms/image/default.png" class="ui mini circular image">
                    <div class="content">
                        <div class="ui sub header">ssehx</div>Administrator level :5</div>
                </div>
            </div>
            <div class="ui fluid popup bottom center transition">
                <a href="/cms/admin/index.php"><button class="ui button inverted green ">管理页面</button></a>

                <a href="/cms/user/launch.php"><button class="negative ui button">注销</button></a>
            </div>
        </div></div>
    <!--遮罩层-->
    <div class="ui dimmer">
        <div class="content">
            <div class="center">
                <h2 class="ui inverted icon header" style="color: #FE9A76;">
                    <i class="warning sign icon"></i>
                    没有权限!
                </h2>
            </div>
        </div>
    </div>

    <div class="user_div">

        <div class="ui pointing menu">
            <a class="item" id="see_user_but">浏览用户 </a>
            <a class="item">浏览管理员 </a>
            <div class="right menu">
                <div class="item">
                    <div class="ui transparent icon input">
                        <input placeholder="Search..." type="text">
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
                    <tbody id="user_table">                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">ssehx</div>
                            </h4></td>
                        <td>
                            1
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            dsflj@q
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="1">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">ssehx123</div>
                            </h4></td>
                        <td>
                            2
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            415996664@qq.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="2">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            3
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="3">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            4
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="4">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            5
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="5">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            6
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="6">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            7
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="7">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            8
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="8">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            9
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="9">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr>                <tr>
                        <td>
                            <div class="ui user fitted checkbox checkbox_td">
                                <input type="checkbox">
                                <label></label>
                            </div>
                        </td>
                        <td>
                            <h4 class="ui image header">
                                <img src="image/patrick.png" class="ui mini rounded image">
                                <div class="content">hello</div>
                            </h4></td>
                        <td>
                            10
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            user@user.com
                        </td>
                        <td>
                            <button class="ui blue button get_user_info_but" user_id="10">详情</button>
                            <button class="ui green button">操作</button>
                        </td>
                    </tr></tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="ui show_user_info">
        <h2 class="ui grey inverted header">USER INFO</h2>
    </div>

</div>


<script src="style/js/jquery.js"></script>
<script src="style/js/semantic.min.js"></script>
<script src="style/js/admin.js"></script>
<script src="../public/public.js"></script>
<script src="style/js/user_control.js"></script>
</body></html>