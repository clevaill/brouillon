<?
header('Content-type: image/jpeg');

$image = imagecreatefromjpeg('payage.jpg'); //ouverture de l'image jpeg

imagepng($image);
imagedestroy($image);
