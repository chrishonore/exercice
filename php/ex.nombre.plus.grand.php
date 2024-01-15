<?php
// demande a l utilisateur d introduire 3 nombre different
echo "entrer le premier nombre ";
$number1=fgets(STDIN);

echo "entrer le deuxieme nombre ";
$number2=fgets(STDIN);

echo "entrer le troisieme nombre ";
$number3=fgets(STDIN);
if (!is_numeric($number1)|| !is_numeric($number2) || !is_numeric($number3)) {
    echo " ceci n est pas un nombre veuillez recommencer" ;
return;
}
// si nombre 1 est superieur aux autres alors c est le plus grand
if ( $number1 > $number2 && $number1 > $number3 ) {
    echo " le chiffre ". $number1 . " est superieur aux chiffres " . $number2 ." et " . $number3 ;
}
// si nombre 2 est superieur aux autres alors c est le plus grand
elseif ( $number2 > $number1 && $number2 > $number3 ) {
    echo " le chiffre".$number2 . " est plus grand queles chiffres " . $number1 . " et " . $number3 ;
}
// si nombre 3 est superieur aux autres alors c est le plus grand
 elseif( $number3>=$number1 && $number3 > $number2) {
     echo " le chiffrre " . $number3 . " est plus grand que " . $number1 . " et " . $number2 ;
 }
?>
