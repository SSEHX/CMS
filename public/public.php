
<?php

include_once dirname(__FILE__).'';

$login = new login();
$login->is_login();


?>


<div class="ui sidebar inverted vertical menu">

    <h4 class="ui horizontal inverted divider">MENU</h4>
    <?php
    $query = "select type,menu from admin_menu";
    $db = db::GET_OBJ();
    $request = $db->query($query);

    while ($type = mysqli_fetch_row($request)){
        echo "<a class='item' type='{$type[1]}' href='/admin/{$type[1]}.php'>{$type[0]}</a>";
    }
    ?>
</div>
<div class="pusher">
    <!-- Site content !-->
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
        $info;
        if ($_SESSION['level']>0){
            $info = "Administrator level :".$_SESSION['level'];
        }
        $user = @<<<user
    <!--        用户信息-->
            <div class="user_head_div">
                <div class="ui horizontal list" id="user_head">
                    <div class="item">
                        <img src="image/{$_SESSION['head']}" class="ui mini circular image">
                        <div class="content">
                            <div class="ui sub header">{$_COOKIE['ych_u']}</div>{$info}</div>
                    </div>
                </div>
                <div class="ui fluid popup bottom center transition">
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
    <div>
        <?php
        var_dump($_COOKIE);
        echo "<hr>";
        var_dump($_SESSION);
        ?>
    </div>
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
