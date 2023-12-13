<?php
// l utilisateur entre un nombre //
echo" entrer le premier nombre ";
// lis le premier nombre //
$number1=fgets(STDIN);
// l utilisateur entre le deuxieme nombre //
echo "divisée par ";
// lis le deuxieme nombre //
$number2=fgets(STDIN);
// si le nombre 1 modulo nombre 2 est egale a 0 //
    if ( $number1 % $number2 == 0) {
    echo "$number1 est divisible par $number2 " ;
    }
// si le nombre 1 modulo nombre 2 est inegale a 0 //
if ( $number1 % $number2 != 0){
    echo $number1." n est pas divisible par ".$number2." veuillez réessayer merci .";
}

