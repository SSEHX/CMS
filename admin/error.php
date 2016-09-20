<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/9/20
 * Time: 12:36
 * 错误提示
 */

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/css/semantic.min.css">
</head>
<body>
<div class="ui basic modal">
    <i class="close icon"></i>
    <div class="header">
        Archive Old Messages
    </div>
    <div class="image content">
        <div class="image">
            <i class="archive icon"></i>
        </div>
        <div class="description">
            <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui cancel red basic inverted button">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui ok green basic inverted button">
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>
</body>
<script src="style/js/jquery.js"></script>
<script src="style/js/semantic.min.js"></script>
<script src="style/js/error.js"></script>
</html>
