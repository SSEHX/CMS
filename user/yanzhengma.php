<?php

//width长度,height高度,$yzmgs字符数
function create_yzm($width = 140,$height = 50,$yzmgs = 4){
    session_start();
    global $yzm;
    $img = imagecreatetruecolor($width, $height);
    $imgcolorBj = imagecolorallocate($img, rand(200, 250), rand(200, 250), rand(200, 250));
    $imgcolorBk = imagecolorallocate($img, rand(0,255), rand(0 ,255), rand(0, 255));
    imagefill($img, 0, 0, $imgcolorBj);
//随机生成100个点干扰
    for ($i = 0; $i < 100; $i++) {
        imagesetpixel($img, rand(3, $width - 3), rand(3, $height - 3), $imgcolorBk);
    }
//随机生成三条线干扰
    for ($i = 0; $i < 3; $i++) {
        imageline($img, 0, rand(0, 50), 120, rand(0, 50), $imgcolorBk);
    }

    $ttffile = 'TrueType/yzm.ttf';
//随机生成字符,
    function ascall($n){
        $texts = "qwetyuipasdfghjklxcvnmQWERTYUPASDFGHJKXCVBNM13457890";
        for ($i = 0; $i < $n; $i++) {
            return $texts[rand(0, strlen($texts) - 1)];
        }
    }

    for ($i = 0; $i < $yzmgs; $i++) {
        $yzm .= ascall($yzmgs);
    }
//把验证码放session里,方便ajax验证用
    $_SESSION['yzm'] = $yzm;
    header("Content-type:image/jpeg");
    imagettftext($img, 25, rand(0, 5), rand(5, 20), rand(30, 40), $imgcolorBk, $ttffile, $yzm);
    imagejpeg($img);
    imagedestroy($img);
}
create_yzm(100,50,4);