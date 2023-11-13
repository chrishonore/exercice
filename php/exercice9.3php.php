<?php
$number1="";
echo" entrer le premier nombre ";
$number1=fgets(STDIN);
$number2="";
echo "divisée par ";
$number2=fgets(STDIN);
    if ( $number1 % $number2 == 0) {
    echo "$number1 est divisible par $number2 " ;
    }
if ( $number1 % $number2 != 0){
    echo $number1." n est pas divisible par ".$number2." veuillez réessayer merci .";
}

