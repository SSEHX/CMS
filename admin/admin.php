<?php
/**
 * Created by PhpStorm.
 * User: xuqi
 * Date: 16/9/5
 * Time: 下午10:22
 */
include_once 'class/check_admin_level.class.php';
include_once '../class/main.class.php';

$level = new check_level();
$level -> level();

$db = db::GET_OBJ();

$self_file_name = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
$where = 'where href = \''.$self_file_name."'";
$level_self = $db -> get_db_data('level','admin_menu',$where);

if ($_SESSION['level']<$level_self[0][0]){
    echo "<script>window.location.href = 'error.php'</script>";
}
?>


<div class="ui sidebar inverted vertical menu">

    <h4 class="ui horizontal inverted divider">MENU</h4>
    <?php
    $query = "select href,menu from admin_menu where is_show = '1'";
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
