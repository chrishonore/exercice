
<?php
/* Écrivez un script PHP qui utilise une boucle for
 pour calculer la factorielle d'un nombre saisi par l'utilisateur.
 La factorielle d'un nombre n est le produit de tous les entiers de 1 à n.
*/
function factoriel() {
echo  " vous voulez connaitre la factorielle de quel nombre ? " ;
$number = trim(fgets( STDIN)) ;
// variable factorielle toujour avec un depart de 1
$f=1;
//variable initial=nombre ; initial superieur ou egale a 1; initial qui suit
for ( $i=$number ; $i>=1 ; $i-- ) {
    $f=$f*$i;
}
echo "la factorille de " .$number . " est de " . $f ;
}
factoriel(6);
factoriel(7);