<?php

echo "entrer le premier nombre ";
$number1=fgets(STDIN);

echo "entrer le deuxieme nombre ";
$number2=fgets(STDIN);

echo "entrer le troisieme nombre ";
$number3=fgets(STDIN);
if ( $number1 > $number2 && $number1 > $number3 ) {
    echo " le ". $number1 . " est superieur a " . $number2 ." et " . $number3 ;
}
elseif ( $number2 > $number1 && $number2 > $number3 ) {
    echo " le " . $number2 . " est plus grand que " . $number1 . " et " . $number3 ;
}
 else {
     echo " le " . $number3 . " est plus grand que " . $number1 . " et " . $number2 ;
 }
?>
