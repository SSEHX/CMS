<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/5
 * Time: 下午10:22
 */
include_once 'class/check_admin_level.class.php';

$level = new check_level();
$level -> level();

if ($_SESSION['level']<3){
    echo "<script>window.location.href = 'error.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="style/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../public/public.css">
    <link rel="stylesheet" type="text/css" href="style/css/admin.css">
</head>
<body>
<div class="ui sidebar inverted vertical menu">

    <h4 class="ui horizontal inverted divider">MENU</h4>
    <?php
    $query = "select type,menu from admin_menu";
    $db = db::GET_OBJ();
    $request = $db->query($query);

    while ($type = mysqli_fetch_row($request)){
        echo "<a class='item' type='{$type[0]}' href='/cms/admin/{$type[0]}'>{$type[1]}</a>";
    }
    ?>
</div>
<div class="pusher">

    <?php
    include_once '../public/public.php';
    ?>

</div>


</body>
<script src="style/js/jquery.js"></script>
<script src="style/js/semantic.min.js"></script>
<script src="style/js/admin.js"></script>
<script src="../public/public.js"></script>
</html>