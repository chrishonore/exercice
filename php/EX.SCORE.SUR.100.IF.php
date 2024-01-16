<?php
//l utilisateur entre un nombre //
echo "entrer un nombre entre 0 et 100 . ";
// lis l entree de l utilisateur //
$number=fgets(STDIN);
// si le nombre est superieur ou egale a 90 //
if ( $number >= 90) {
    echo " tres bien vous avez fait " . $number ;
}
// si le nombre est superieur ou egale a 80 et que il est inferieur a 90 //
if($number >= 80 && $number < 90) {
    echo " bien  votre resultat est de " . $number ;
}
// si le nombre est superieur ou egale a 70 et que il est inferieur a 80 //
if ($number >= 70 && $number < 80) {
    echo " satisfaisant votre moyenne est de " . $number ;
}
// si le nombre est inferieur a 70 //
if ($number < 70 ) {
    echo "a ameliorer d urgence votre score est de " . $number ;
}
 ?>