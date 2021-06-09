<?php 
session_start(); 
$text = "1000"; 
$_SESSION["vercode"] = $text; 
//$height = 25; 
//$width = 65;   
$image_p = imagecreatetruecolor(/*$width, $height*/100,100); 
$black = imagecolorallocate($image_p, 0, 0, 0); 
$white = imagecolorallocate($image_p, 255, 255, 255); 
$font_size = 14; 
imagestring($image_p, $font_size, 5, 5, $text, $white); 
imagejpeg($image_p, null, 80); 
?>