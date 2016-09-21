<?php
include_once __ROOT__.'/main.class.php';

$login = new login();
$login->is_login();
?>
    <div class="ui top attached demo menu" >
        <!--        菜单按键-->
        <a class="item" id="sidebar_but"><i class="sidebar icon"></i> 菜单(Menu) </a>
        <!--        搜索框-->
        <div class="header_search">
            <div class="ui left icon action input">
                <i class="search icon"></i>
                <input type="text" placeholder="Search">
                <div class="ui blue submit button">搜索</div>
            </div>
        </div>

        <?php
        $info;$goto_admin;
        if ($_SESSION['level']>0){
            $info = "Administrator level :".$_SESSION['level'];
            $goto_admin = "<a href=\"/cms/admin/admin.php\"><button class=\"ui button inverted green \">管理页面</button></a>
";
        }
        $user = @<<<user
    <!--        用户信息-->
            <div class="user_head_div">
                <div class="ui horizontal list" id="user_head">
                    <div class="item">
                        <img src="/cms/image/{$_SESSION['head']}" class="ui mini circular image">
                        <div class="content">
                            <div class="ui sub header">{$_COOKIE['ych_u']}</div>{$info}</div>
                    </div>
                </div>
                <div class="ui fluid popup bottom center transition">
                $goto_admin
                    <a href="/cms/user/launch.php"><button class="negative ui button">注销</button></a>
                </div>
            </div>
user;
        $login = <<<login
            <div class="login_div">
                <a href="/cms/user/login.php"><button class="ui inverted violet button">登陆</button></a>
                <a href="/cms/user/register.php"><button class="ui inverted blue button">注册</button></a>
            </div>
login;

        if (@$_SESSION['i']){
            echo $user;

        }else{
            echo $login;
        }
        ?>
</div>
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
