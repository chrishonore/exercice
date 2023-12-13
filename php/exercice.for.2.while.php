<?php
/* Écrivez un script PHP qui utilise une boucle while
 pour calculer la factorielle d'un nombre saisi par l'utilisateur.
 La factorielle d'un nombre n est le produit de tous les entiers de 1 à n.
*/
echo " vous voulez connaitre la factorielle de quel nombre ? ";
$number = trim(fgets(STDIN));

while ( $number <= 1 || $number >= 10  ) {
       $number = ( 1 * 1 ) ;
    $number = ( 1 * 1 * 2 ) ;
    $number = ( 1 * 1 * 2 * 3 ) ;
    $number = ( 1 * 1 * 2 * 3 * 4 ) ;
    echo "la factorille de " .$number . " est de " . $number ;
}


