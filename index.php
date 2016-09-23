<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/9/18
 * Time: 18:30
 */

include_once 'class/main.class.php';
$db = db::GET_OBJ();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="style/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/document.css">
    <link rel="stylesheet" type="text/css" href="public/public.css">
</head>
<body>

<div class="ui sidebar inverted vertical menu">

    <h4 class="ui horizontal inverted divider">MENU</h4>
    <?php
        $data = $db->get_db_data('type,menu','document_menu');
        foreach ($data as $value){
            echo "<a class='item' href = 'document/{$value[0]}'>{$value[1]}</a>";
        }
    ?>
</div>
<div class="pusher">
    <!-- Site content !-->
    <?php
    include_once 'public/public.php';
    ?>
    <div>
        <?php
        var_dump($_SESSION);
        echo "<hr>";
        var_dump($_COOKIE);
        ?>
    </div>
</div>
</body>
<script src="style/js/jquery.js"></script>
<script src="style/semantic.min.js"></script>
<script src="style/js/document.js"></script>
<script src="public/public.js"></script>
</html>
