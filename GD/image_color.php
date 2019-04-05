<?php
header("Content-type: image/png"); //la ligne qui change tout !

/* on créé l'image en vraies couleurs avec une largeur de 200 pixels et une hauteur de 200 pixels */
$image = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT']."/tuto_gd/background.jpg");

$color = "000000";
$rouge = hexdec(substr($color,0,2)); //conversion du canal rouge
$vert = hexdec(substr($color,2,4)); //conversion du canal vert
$bleu = hexdec(substr($color,4,6)); //conversion du canal bleu

/* on créé la couleur et on l'attribue à une variable pour ne pas la perdre */
$couleur = imagecolorallocatealpha($image,$rouge,$vert,$bleu,0);

putenv('GDFONTPATH=' . realpath('.')); //fonction inconnue

for($i=1;$i<4;$i++)
	{
	$couleur = imagecolorallocatealpha($image,$rouge,$vert,$bleu,30*$i);
	imagettftext($image, 21, 0, 5, 50*$i+15, $couleur, 'hardway', 'transparence'); //fonction inconnue
	}

imagepng($image); //renvoie une image sous format png
imagedestroy($image); //détruit l'image, libérant ainsi de la mémoire
