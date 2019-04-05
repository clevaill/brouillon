<?php
header("Content-type: image/png"); //la ligne qui change tout !
$x = 50; //largeur de mon image en PIXELS uniquement !
$y = 100; //hauteur de mon image en PIXELS uniquement !

/* on créé l'image en vraies couleurs avec une largeur de 50 pixels et une hauteur de 100 pixels */
$image = imagecreatetruecolor($x,$y);

$color = "BEDFFE";
$rouge = hexdec(substr($color,0,2)); //conversion du canal rouge
$vert = hexdec(substr($color,2,4)); //conversion du canal vert
$bleu = hexdec(substr($color,4,6)); //conversion du canal bleu
$couleur = imagecolorallocate($image,$rouge,$vert,$bleu);

/* on créé la couleur et on l'attribue à une variable pour ne pas la perdre */
imagefilledellipse($image,25,50,25,25,$couleur); //on créé un cercle
imagepng($image); //renvoie une image sous format png
imagedestroy($image); //détruit l'image, libérant ainsi de la mémoire
