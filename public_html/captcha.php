<?php
	session_start();
	$string = "";
	for ($i = 0; $i < 7; $i++)
		$string .= chr(rand(97, 122));
	
	$_SESSION['rand_code'] = $string;

	$dir = "fonts/";

	$a = (rand(1, 255));
	$b = (rand(1, 150));
	$c = (rand(1, 150));
	$image = imagecreatetruecolor(200, 60);
	$black = imagecolorallocate($image, 0, 0, 0);
	$color = imagecolorallocate($image, $a, $b, $c);
	$white = imagecolorallocate($image, 255, 255, 255);

	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext ($image, 30, 0, 10, 40, $color, $dir."liquidis.ttf", $_SESSION['rand_code']);

	header("Content-type: image/png");
	imagepng($image);
?>