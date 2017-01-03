<?php
// The file
$url = 'me.jpg';


// Content type
header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($url);
$new_width = 900;
$new_height = 900;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($url);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$tmpfilename='kk.png';
// Output
imagepng($image_p,$tmpfilename);//, null, 100);

?>