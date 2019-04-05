<?
/* on récupère les infos sur l'image grâce à la fonction PHP */
$details = getimagesize($_SERVER['DOCUMENT_ROOT'].'../images/payage.jpg');

/* on affiche les infos */
echo "PHP : L'image a une largeur de {$details[0]}px et une hauteur de {$details[1]}px. Elle est de type ".image_type_to_mime_type($details[2]);

/* avec GD, on est obligé de créer l'image avant d'en faire quoi que ce soit */
$image = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].'../images/payage.jpg');
$x = imagesx($image); //on récupère la largeur
$y = imagesy($image); //on récupère la hauteur

imagedestroy($image); 
echo "<br />GD : L'image a une largeur de {$x}px et une hauteur de {$y}px";
