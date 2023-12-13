
<?php
/* Écrivez un script PHP qui utilise une boucle for
 pour calculer la factorielle d'un nombre saisi par l'utilisateur.
 La factorielle d'un nombre n est le produit de tous les entiers de 1 à n.
*/
echo  " vous voulez connaitre la factorielle de quel nombre ? " ;
$number = trim(fgets( STDIN)) ;
$f=1;
for ( $i=$number ; $i>=1 ; $i-- ) {
    $f=$f*$i;
}
echo "la factorille de " .$number . " est de " . $f ;