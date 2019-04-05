<?php
header("Content-type: image/png"); //la ligne qui change tout !
$x = 200; //largeur de mon image en PIXELS uniquement !
$y = 200; //hauteur de mon image en PIXELS uniquement !

/* on créé l'image en vraies couleurs avec une largeur de 200 pixels et une hauteur de 200 pixels */
$image = imagecreatetruecolor($x,$y);

$color = "BEDFFE";
$rouge = hexdec(substr($color,0,2)); //conversion du canal rouge
$vert = hexdec(substr($color,2,2)); //conversion du canal vert
$bleu = hexdec(substr($color,4,2)); //conversion du canal bleu

/* on créé la couleur et on l'attribue à une variable pour ne pas la perdre */
$couleur = imagecolorallocate($image,$rouge,$vert,$bleu);

putenv('GDFONTPATH=' . realpath('.')); //ligne obligatoire !
imagettftext($image, 14, 45, 10, 190, $couleur, 'dark', 'Voici un texte !');

imagepng($image); //renvoie une image sous format png
imagedestroy($image); //détruit l'image, libérant ainsi de la mémoire
