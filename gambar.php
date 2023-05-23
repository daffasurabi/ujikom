<?php 
//Upload and store base64 image
$myimage = rand();
define('UPLOAD_DIR', 'uploads/');
$image_parts = explode(";base64,", $_POST['imagedata']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$file = UPLOAD_DIR . $myimage . ".png";
file_put_contents($file,base64_decode($image_parts[1]));

echo "dah";
?>

